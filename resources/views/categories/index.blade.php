<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class = "col-md-8 col-12">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Categories') }}
                </h2>
            </div>
            <div class="col-md-4 col-12">
                <button  type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addCategoryModal"> 
                    Add Category
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(@isset($categories) && count($categories)>0)
                        @foreach ($categories as $category)
                            <tr> 
                                <th scope = "row">
                                    {{$category->id}}
                                </th>
                                <td>
                                    {{$category->name}}
                                </td>
                                <td>
                                    {{$category->description}}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('categories')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputCategoryName">Name</label>
                      <input type="text" class="form-control" id="c_name" name="name" aria-describedby="caregoryName" placeholder="Enter category name" required>
                      <small id="categoryName" class="form-text text-muted">Add a name</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCategoryName">Description</label>
                        <textarea class="form-control" id="c_description" name="description" rows="5"></textarea required>
                        <small id="categoryDescription" class="form-text text-muted">Add a description</small>
                      </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>