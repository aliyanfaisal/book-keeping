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
            <h3 class="card-title">Cash In</h3>
        </div>

        <div class="card-body">
        <h6 class="font-weight-bold">Please Fill All Details Carefully.</h6>

        @if(Session::has("message"))
            <div class="alert alert-info text-center m-auto">
                {{Session::get('message')}}
            </div>
        @endif
        <form action="{{route('submit-cash-in')}}" method="post" class="d-flex">
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
                                <input required type="text" name="program" placeholder="Program" class="form-control">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input required type="text" name="reg_no" placeholder="Registration No." class="form-control">
                            </td>
                            <td>
                                <input required type="text" name="semester" placeholder="Semester" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-3 h5" >
                                Particulars
                            </td>
                            <td class="pl-4 font-weight-bold py-3 h5">
                                Total
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Admission Fee
                            </td>
                            <td>
                                <input type="text" name="admission_fee" placeholder="Admission Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Registration Fee
                            </td>
                            <td>
                                <input type="text" name="registration_fee" placeholder="Registration Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Security Fee
                            </td>
                            <td>
                                <input type="text" name="security_fee" placeholder="Security Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Tuition Fee
                            </td>
                            <td>
                                <input type="text" name="tuition_fee" placeholder="Tuition Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Semester Enrollment Fee
                            </td>
                            <td>
                                <input type="text" name="semester_enrollment_fee" placeholder="Semester Enrollment Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Student Fund
                            </td>
                            <td>
                                <input type="text" name="student_fee" placeholder="Student Fund" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Examination Fee
                            </td>
                            <td>
                                <input type="text" name="examination_fee" placeholder="Examination Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Library Fee
                            </td>
                            <td>
                                <input type="text" name="library_fee" placeholder="Library Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Others
                            </td>
                            <td>
                                <input type="text" name="others" placeholder="Others" class="form-control fee">
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