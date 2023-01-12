<?php include "../layouts/after.php"; ?>
<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title fw-bolder">SEO</h3>
            </div>
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                                    <label class="fs-5 fw-bold mb-2">Title</label>
                                    <input class="form-control form-control-solid" placeholder="" name="title">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                                    <label class="fs-5 fw-bold mb-2">Keyword</label>
                                    <input class="form-control form-control-solid" placeholder="" name="keyword">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                                    <label class="fs-5 fw-bold mb-2">Description</label>
                                    <textarea class="form-control form-control-solid" rows="6" name="description" placeholder=""></textarea>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
                                    <label class="fs-5 fw-bold mb-2">Image</label>
                                    <input class="form-control form-control-solid" type="file">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Reset</button>
                    <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                        <span class="indicator-label">Save</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../layouts/before.php"; ?>