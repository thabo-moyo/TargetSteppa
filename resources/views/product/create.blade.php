<div class="create-modal hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none flex-column justify-center items-center"id="create_modal">

    <div class="col-8 bg-white rounded create-modal-header">
        <div class="row">
            <div class="col-12 p-3 w-100 h-100 text-center ">
                <div class="login-header d-flex justify-content-center pt-5">
                    <h5 for="email" class="col-md-4 col-form-label text-md-right text-xl text-bold">{{ __('Add New Project') }} </h5>
                </div>
                <form class="d-flex flex-column align-content-center justify-content-center text-left p-5" method="POST"
                    action="{{ route('create') }}">
                    @csrf
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input required  class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Project Title" aria-label="Full name" name="title">
                    </div>
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input required  class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Description" aria-label="Full name" name="content">
                    </div>

                    <input type="date" name="due_date" min="1000-01-01"
                         max="3000-12-31" class="form-control" placeholder="Due date" required >

                    <select class="form-select" aria-label="Default select example" name="tasks required ">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="form-group row mb-0 mt-5">
                        <div class="col-md-12 border-0">
                            <button type="submit" class="animate-pulse-200 hover:bg-purple-700 w-100 border-0  text-white btn bg-gradient-to-r from-purple-700 to-blue-500 rounded-lg">
                                {{ __('Add') }}
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b ">
        <button
            class="text-purple-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
            type="button" onclick="toggleModal('create_modal')">
            Close
        </button>
        <button
            class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
            type="button" onclick="toggleModal('create_modal')">
            Save Changes
        </button>
    </div>
</div>
<div class="hidden opacity-25 absolute inset-0 z-40 bg-black" id="create_modal-backdrop" style="border-radius: 10px"></div>


