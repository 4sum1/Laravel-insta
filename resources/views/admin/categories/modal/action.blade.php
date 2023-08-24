{{-- edit --}}
<div class="modal fade" id="edit-category-{{$category->id}}">
    <div class="modal-dialog">
        <form action="{{route('admin.categories.update', $category->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="modal-content border-warning">
                <div class="modal-header border-warning">
                    <h3 class="h5 modal-title">
                        <i class="fa-regular fa-pen-to-square"></i> Edit Category
                    </h3>
                </div>
                <div class="modal-body">
                    <input type="text" name="name" id="form-control" placeholder="Category name"
                    value="{{$category->name}}">
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-warning btn-sm" data-bs-dismiss="modal">cancel</button>
                    <button type="submit" class="btn btn-warning btn-sm">Update</button>
                </div>
                {{-- if you want to add error here, you need to find other way to do because modal disapears when you click the button --}}
            </div>
        </form>
    </div>
</div>

{{-- DELETE --}}
<div class="modal fade" id="delete-category-{{$category->id}}">
    <div class="modal-dialog">
        <form action="{{route('admin.categories.destroy', $category->id)}}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-content border-danger">
                <div class="modal-header border-danger">
                    <h3 class="h5 modal-title text-danger">
                        <i class="fa-regular fa-trash-can"></i> Delete Category
                    </h3>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete <span class="fw-bold">{{$category->name}}</span> category?</p>
                    <p class="fw-light">This action will affect all the posts under this category. Posts without a category will fall under Uncategorized.</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
                {{-- if you want to add error here, you need to find other way to do because modal disapears when you click the button --}}
            </div>
        </form>
    </div>
</div>
