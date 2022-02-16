<div class="modal-container" id="editPetModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Pet Information</h4>
            </div>
            <div class="modal-body overflow-auto">
                <form>
                    <div class="mb-3">
                        <label for="pet-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="pet-name">
                    </div>
                    <div class="row mx-md-auto">
                        <div class="col-md-6 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label for="pet-age" class="col-form-label">Age</label>
                                <input type="number" class="form-control" name="pet-age">
                            </div>
                        </div>
                        <div class="col-md-6 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label class="col-form-label">Gender</label>
                                <select class="form-select" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-md-auto">
                        <div class="col-md-3 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label for="pet-size" class="col-form-label">Size</label>
                                <input type="number" class="form-control" name="pet-size">
                            </div>
                        </div>
                        <div class="col-md-3 ps-md-0 pe-md-0">
                            <div class="mb-3">
                                <label for="pet-weight" class="col-form-label">Weight</label>
                                <input type="number" class="form-control" name="pet-weight">
                            </div>
                        </div>
                        <div class="col-md-6 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label class="col-form-label">Sterilization</label>
                                <select class="form-select" name="pet-sterilization">
                                    <option value="spayed">Spayed</option>
                                    <option value="neutered">Neutered</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pet-image" class="form-label">Pet Image</label>
                        <input class="form-control" type="file" name="pet-image">
                    </div>
                    <div class="mb-3">
                        <label for="personality-text" class="col-form-label">Description</label>
                        <textarea class="form-control" name="pet-description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="closeBtn">Cancel</button>
                <button type="button" class="btn btn-success" id="saveBtn">Save</button>
            </div>
        </div>
    </div>
</div>