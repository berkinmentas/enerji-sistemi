<div class="form-group mb-3">
    <label for="file" class="font-weight-bold dropzone-label fw-bold mb-2"><?php echo e($title ?? 'Görsel'); ?></label>
    <div class="needsclick dropzone dropzone-single" id="file-dropzone"></div>
</div>
<?php $__env->startPush('js-stack'); ?>
    <script>
        window.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                let uploadedDocumentMap = {};
                new Dropzone('.dropzone.dropzone-single', {
                    url: '<?php echo e(route('admin.media.store')); ?>',
                    maxFilesize: 100,
                    maxFiles: 1,
                    acceptedFiles: 'image/jpeg, image/png, image/jpg',
                    addRemoveLinks: true,
                    chunking: true,
                    parallelChunkUploads: true,
                    retryChunks: true,
                    chunkSize: 1000000,
                    headers: {
                        'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                    },
                    init: function () {
                        this.on("addedfile", function (file) {
                            if (this.files.length === 2) {
                                this.removeFile(this.files[0]);
                                if (this.files.length > 1) {
                                    this.files = this.files.slice(1, 2);
                                }
                            }
                        });
                    },
                    success: function (file, response) {
                        let inputEl = document.createElement('input');
                        inputEl.setAttribute('type', 'hidden');
                        inputEl.setAttribute('name', 'file[0][filename]');
                        inputEl.setAttribute('value', response.name);

                        let inputElTitle = document.createElement('input');
                        inputElTitle.setAttribute('type', 'hidden');
                        inputElTitle.setAttribute('name', 'file[0][title]');
                        inputElTitle.setAttribute('value', file.name);

                        $("#file-dropzone").parents('form')[0].append(inputEl);
                        $("#file-dropzone").parents('form')[0].append(inputElTitle);
                        uploadedDocumentMap[file.upload.uuid] = response.name;
                    },
                    removedfile: function (file) {
                        file.previewElement.remove();

                        $("#file-dropzone").parents('form').find('[name="file[0][title]"]').remove();
                        $("#file-dropzone").parents('form').find('[name="file[0][filename]"]').remove();
                    },
                    addedfiles: function () {
                        dropzoneAddedFilesEventHandler()
                    },
                    queuecomplete: function () {
                        dropzoneQueueCompleteEventHandler()
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/ozay-enerji-sistemleri/resources/views/admin/includes/_dropzone-single.blade.php ENDPATH**/ ?>