@extends('admin.layouts.app')


@section('content')

    @include('admin.layouts.sidenav')
      <div class="main-content" id="panel">
          
        @include('admin.layouts.nav')

        
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Payments</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/index') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Admin</li>
                            </ol>
                        </nav>
                        </div>
                      
                    </div>
                    </div>
                </div>
            </div>

                <div class="container-fluid mt--6">
                    <div class="card">
                        <div class="card-header">
                            payments
                        </div>
                        <div class="card-body">
                             @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('payment has been successfully deleted') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Email</th>
                                        <th>payment</th>
                                        <th>Transaction</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Payment Gateway</th>
                                        <th>Status</th>
                                        <th>created</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments as $payment)
                                            <tr>
                                                <td>
                                                     
                                                     <b>{{ $payment->user_email }}</b>
                                                </td>
                                                <td>
                                                    {{ $payment->book->name }}
                                                </td>
                                                <td>
                                                    {{ $payment->txnId }}
                                                </td>
                                                <td>
                                                    {{ number_format($payment->amount) }}
                                                </td>
                                                <td>
                                                    {{ $payment->description }}
                                                </td>
                                                <td>
                                                    {{ $payment->type }}
                                                </td>
                                                <td>
                                                    {{ $payment->status }}
                                                </td>
                                                <td>{{ $payment->created_at->diffForHumans() }}</td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                         <div class="card-footer py-4">
                        <nav aria-label="...">
                             {{ $payments->onEachSide(6)->links() }}
                        </nav>
                      </div>
                    </div>
                </div>


                 </div>

    
@endsection
@section('script')