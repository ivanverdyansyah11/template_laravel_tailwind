<div id="delete-modal" tabindex="-1" aria-hidden="true" class="modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Delete Student</h3>
                <button type="button" data-modal-hide="delete-modal" class="group">
                    <i class="fa-solid fa-xmark text-[1rem] group-hover:text-light-100"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>Confirm Student Deletion: Are you sure you want to delete this student? This action
                    cannot be undone, and the student will be permanently removed from the system.</p>
            </div>
            <div class="modal-footer">
                <form id="buttonDeleteStudent" class="form w-full flex gap-2 items-center">
                    <button type="submit" class="button-primary w-full">Delete Student</button>
                    <button type="button" class="button-reverse w-full" data-modal-hide="delete-modal">Cancel Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
