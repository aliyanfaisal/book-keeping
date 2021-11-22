@extends('layouts.app_main')


@section('content')
<style>
    tbody td{
        /* display: flex; */
        padding: 0px !important;
        
    }
    tr{
       border-bottom: 10px solid white;
    }
</style>
<section class="m-auto w-80 ">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cash Out</h3>
        </div>

        <div class="card-body">
        <h6 class="font-weight-bold">Please Fill All Details Carefully.</h6>

        @if(Session::has("message"))
            <div class="alert alert-info text-center m-auto">
                {{Session::get('message')}}
            </div>
        @endif
        <form action="{{route('submit-cash-out')}}" method="post" class="d-flex">
            <!-- FIRST PART  -->
            @csrf
            <div class="col-md-9">
                <table class="table ">
                    <thead class="">
                        <th colspan="5">
                            <h3 class="text-right font-weight-bolder">OFFICIAL PAYMENT RECEIPT</h3>
                        </th>
                      
                    </thead>

                    <tbody>
                        <!-- TABLE BODY  -->
                        <colgroup>
                            <col style="width:70%">
                            <col style="width:30%">
                        </colgroup>
                        <tr>
                            <td>
                                <input required type="text" name="name" placeholder="Name" class="form-control">
                            </td>
                            <td>
                                <input required type="text" name="contact" placeholder="Contact No" class="form-control">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input required type="text" name="designation" placeholder="Designation" class="form-control">
                            </td>
                            <td>
                                <input required type="text" name="cnic" placeholder="Cnic" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-3 h5" >
                                Heads
                            </td>
                            <td class="pl-4 font-weight-bold py-3 h5">
                                Total
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Salary
                            </td>
                            <td>
                                <input type="text" name="salary" placeholder="Salary" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Rental
                            </td>
                            <td>
                                <input type="text" name="rental" placeholder="Rental" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Utility Bills
                            </td>
                            <td>
                                <input type="text" name="utility_bills" placeholder="Utility Bills" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Purchases
                            </td>
                            <td>
                                <input type="text" name="purchases" placeholder="Purchases" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Repair Maintanance Fee
                            </td>
                            <td>
                                <input type="text" name="repair_maintenance" placeholder="Repair Maintanance" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="text-right pl-4 font-weight-bolder py-1 pr-4 h5">
                                TOTAL
                            </td>
                            <td>
                                <input type="text" name="total" class="form-control">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input type="text" name="paid" placeholder="Paid" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="balance" placeholder="Balance" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="total_in_words" placeholder="Amount in Words" class="form-control">
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

            <!-- SECOND PART  -->
            <div class="col-md-3" style="margin-top: 70px;"> 
                <table class="table">
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="rec_no" placeholder="Rec No.">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" name="date" placeholder="Date" class="form-control">
                        </td>
                    </tr>

                    <tr class="pb-2" style="border-bottom: 15px solid white;">
                        <td>
                            <input type="text" name="campus" placeholder="Campus" class="form-control" id="">
                        </td>
                    </tr>

                    <tr class="pl-4 font-weight-bold py-1 h6">
                        <td>Payment Mode</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="payment_mode" value="cash"> Cash:
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="payment_mode" value="cheque"> Cheque:
                        </td>
                    </tr>

                    <tr>
                        <td>
                            After Fee Payment Whatsapp your Slip at 0302-8272909 For Digital Update
                        </td>
                    </tr>


                    <tr class="">
                        <td class="pt-5">
                            <button type="submit" value="Submit" class="btn btn-lg btn-primary" id="">Submit</button>
                        </td>
                    </tr>
                </table>
            </div>


        </form>

    
        </div>
    </div>

    
</section>


@endsection