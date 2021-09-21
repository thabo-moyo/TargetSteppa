<div class="create-modal hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none flex-column justify-center items-center" id="create_modal">

    <div class="col-8 bg-white rounded create-modal-header">

        <div class="row">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative hidden"  id="create-failed" role="alert">
                <strong class="font-bold">Failed to create Project!</strong>
                <span class="block sm:inline">Please try again. Contact support if issue is not fixed.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                 <svg  onclick="hideAlert()" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 20 20"><title>Close</title><path
                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
              </span>
            </div>
            <div class="col-12 p-3 w-100 h-100 text-center ">
                <div class="login-header d-flex justify-content-center pt-5">
                    <h5 for="email" class="col-md-4 col-form-label text-md-right text-xl text-bold">{{ __('Add New Project') }} </h5>
                </div>
                <form class="d-flex flex-column align-content-center justify-content-center text-left p-5" id="project_create">
                    @csrf
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input required class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Project Title" aria-label="Full name" name="title">
                    </div>
                    <div class="flex items-center border-b border-teal-500 py-2">
                        <input required class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Description" aria-label="Full name" name="content">
                    </div>

                    <input required type="date" name="due_date" min="1000-01-01"
                         max="3000-12-31" class="form-control" placeholder="Due date"  >

                    <select required class="form-select" aria-label="Default select example" name="tasks" >
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="form-group row mb-0 mt-5">
                        <div class="col-3 mx-auto border-0">
                            <button type="submit" id="add-button" class="animate-pulse-200 hover:bg-purple-700 w-100 border-0  text-white btn bg-gradient-to-r from-purple-700 to-blue-500 rounded-lg">
                                <i class="fa fa-plus" id="add-button-icon"></i>
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
@push('scripts')
    <script>

    function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }

    function hideAlert() {
        $('#create-failed').hide();
    }

    $(function() {

        $('#project_create').on('submit' ,  async function (event) {
            event.preventDefault();

            const $form = $(this);

            $('#add-button-icon').addClass('fa-spinner fa-spin');

            const $inputs = $form.find("input, select, button, textarea");

            const serializedData = $form.serialize();

            try {
                const response = await axios.post('/projects', serializedData);
                const data = await response.data;
                $('#create-failed').addClass('hidden');
                $('#add-button-icon').addClass('fa-check');

            }  catch (error){

                console.log(error);

                setTimeout(function (){
                    $('#add-button-icon').removeClass();
                    $('#add-button-icon').addClass('fas fa-plus');
                    $('#create-failed').removeClass('hidden');

                }, 2000)

            } finally {

            }
        })

    });


</script>
@endpush

