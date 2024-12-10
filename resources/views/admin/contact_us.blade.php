 @extends('admin.layout')

@section('content')
	<h5 class="mb-4 fw-light">
    <a class="text-reset" href="{{ url('panel/admin') }}">{{ __('admin.dashboard') }}</a>
      <i class="bi-chevron-right me-1 fs-6"></i>
      <span class="text-muted">{{ __('Contact Us') }} ({{$data->count()}})</span>
  </h5>

<div class="content">
	<div class="row">

		<div class="col-lg-12">

      @if (session('info_message'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <i class="bi-exclamation-triangle me-1"></i>	{{ session('info_message') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
                </div>
              @endif

			@if (session('success_message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="bi bi-check2 me-1"></i>	{{ session('success_message') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <i class="bi bi-x-lg"></i>
                </button>
                </div>
              @endif

			<div class="card shadow-custom border-0">
				<div class="card-body p-lg-4">

          <div class="d-inline-block mb-2 w-100">
		  {{-- Totast Message for success and delete --}}
		  @if (session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif

			@if (session('error'))
				<div class="alert alert-danger">
					{{ session('error') }}
				</div>
			@endif
		{{-- Totast Message for success and delete --}}


          {{-- @if ($data->count() != 0)
            <!-- form -->
            <form role="search" autocomplete="off" action="{{ url('panel/admin/members') }}" method="get" class="position-relative">
							<i class="bi bi-search btn-search-2 bar-search"></i>
             <input type="text" name="q" class="form-control ps-5" placeholder="{{ __('misc.search') }}">
          	</form><!-- form -->
            @endif --}}
          </div>

					<div class="table-responsive p-0">
						<table class="table table-hover">
						 <tbody>
					@if ($data->count() != 0)
                  <tr>
										<th class="active">ID</th>
										<th class="active">{{ trans('auth.full_name') }}</th>
										<th class="active">Email</th>
										<th class="active">Subject</th>
										<th class="active">{{ trans('admin.actions') }}</th>
                   </tr>

                 @foreach ($data as $item)
									 <tr>
										 <td>{{ $item->id }}</td>
										 <td>{{ $item->name }}</td>
										 <td>{{ $item->email }}</td>
										 <td>{{ $item->subject  }}</td>
										 <td>

											<div class="d-flex">
													{{-- <a href="{{ route('user.edit', $item->id) }}" class="btn btn-success rounded-pill btn-sm me-2">
														<i class="bi-pencil"></i>
													</a>  --}}
													
													<a href="#" 
													class="btn btn-success rounded-pill btn-sm me-2"
													data-bs-toggle="modal" 
													data-bs-target="#infoModal" 
													data-id="{{ $item->id }}"
													data-name="{{ $item->name }}" 
													data-email="{{ $item->email }}" 
													data-subject="{{ $item->subject }}" 
													data-message="{{ $item->message }}">
														<i class="bi-pencil"></i>
													</a>
												



												<form method="POST" action="{{ route('contacts.destroy', $item->id) }}" class="d-inline">
													@csrf
													@method('DELETE')
													<button type="submit" class="btn btn-danger btn-sm me-2 rounded-pill" onclick="return confirm('Are you sure you want to delete this contact?')">
														<i class="bi-trash3"></i>
													</button>
												</form>
											</div>
										</td>

						</tr><!-- /.TR -->
                   @endforeach 

				   <!-- Single Modal Outside the Loop -->
					<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="infoModalLabel">Contact Information</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<p><strong>ID:</strong> <span id="modalId"></span></p>
									<p><strong>Name:</strong> <span id="modalName"></span></p>
									<p><strong>Email:</strong> <span id="modalEmail"></span></p>
									<p><strong>Subject:</strong> <span id="modalSubject"></span></p>
									<p><strong>Message:</strong> <span id="modalMessage"></span></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

								 @else
										<h5 class="text-center p-5 text-muted fw-light m-0">{{ trans('misc.no_results_found') }} 

                      @if (isset($query))
                        <div class="d-block w-100 mt-2">
                          <a href="{{url('panel/admin/members')}}"><i class="bi-arrow-left me-1"></i> {{ trans('auth.back') }}</a>
                        </div>
                      @endif
                    </h5>
									@endif

								</tbody>
								</table>
							</div><!-- /.box-body -->

				 </div><!-- card-body -->
 			</div><!-- card  -->
{{-- 
		@if( $data->lastPage() > 1 )
			{{ $data->appends(['q' => $query])->onEachSide(0)->links() }}
		@endif --}}
 		</div><!-- col-lg-12 -->

	</div><!-- end row -->
</div><!-- end content -->

<script>
    const infoModal = document.getElementById('infoModal');
    infoModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        const button = event.relatedTarget;

        // Extract data-* attributes
		const id = button.getAttribute('data-id');
        const name = button.getAttribute('data-name');
        const email = button.getAttribute('data-email');
        const subject = button.getAttribute('data-subject');
        const message = button.getAttribute('data-message');

        // Update modal content
		document.getElementById('modalId').textContent = id;
        document.getElementById('modalName').textContent = name;
        document.getElementById('modalEmail').textContent = email;
        document.getElementById('modalSubject').textContent = subject;
        document.getElementById('modalMessage').textContent = message;
    });
</script>

@endsection 



