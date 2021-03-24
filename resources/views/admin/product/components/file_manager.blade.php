<!-- Modal -->
<div class="modal fade" id="fileManagerModal" tabindex="-1" aria-labelledby="fileManagerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fileManagerModalLabel">File Manager</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-grid">
                                    <a href="javascript:;" class="">+ Add File</a>
                                    <input type="file" accept=".jpg, .jpeg, .png" name="fm_file" class="fm_file_importer btn btn-light">
                                </div>
                                <h5 class="my-3">My Drive</h5>
                                <div class="fm-menu">
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:;" class="list-group-item py-1"><i class="icon-folder icons"></i><span> All Files</span></a>
                                        <a href="javascript:;" class="list-group-item py-1"><i class="icon-folder-alt icons"></i><span> Recents</span></a>
                                        <a href="javascript:;" class="list-group-item py-1"><i class="icon-camera icons"></i><span> Important</span></a>
                                        <a href="javascript:;" class="list-group-item py-1"><i class="icon-event icons"></i><span> Documents</span></a>
                                        <a href="javascript:;" class="list-group-item py-1"><i class="icon-picture icons"></i><span> Images</span></a>
                                        <a href="javascript:;" class="list-group-item py-1"><i class="icon-camrecorder icons"></i><span> Videos</span></a>
                                        <a href="javascript:;" class="list-group-item py-1"><i class="icon-trash icons"></i><span> Deleted Files</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="fm-search">
                                    <div class="mb-0">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-transparent"><i class="bx bx-search"></i></span>
                                            <input type="text" class="form-control" placeholder="Search the files" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body file_manager_image_list">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="#" id="fm_confirm_btn" class="btn btn-primary">Select</a>
            </div>
        </div>
    </div>
</div>

