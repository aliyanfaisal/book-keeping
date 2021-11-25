@extends('layouts.app_main')


@section('content')
<link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
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
        <form action="{{route('submit-cash-in')}}" method="post" target="_blank" class="d-flex">
            <!-- FIRST PART  -->
            @csrf
            <div class="col-md-9">
                <table class="table " id="print_form">
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
                                <input type="number" value="0" name="admission_fee" placeholder="Admission Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Registration Fee
                            </td>
                            <td>
                                <input type="number" value="0" name="registration_fee" placeholder="Registration Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Security Fee
                            </td>
                            <td>
                                <input type="number" value="0" name="security_fee" placeholder="Security Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Tuition Fee
                            </td>
                            <td>
                                <input type="number" value="0" name="tuition_fee" placeholder="Tuition Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Semester Enrollment Fee
                            </td>
                            <td>
                                <input type="number" value="0" name="semester_enrollment_fee" placeholder="Semester Enrollment Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Student Fund
                            </td>
                            <td>
                                <input type="number" value="0" name="student_fee" placeholder="Student Fund" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Examination Fee
                            </td>
                            <td>
                                <input type="number" value="0" name="examination_fee" placeholder="Examination Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Library Fee
                            </td>
                            <td>
                                <input type="number" value="0" name="library_fee" placeholder="Library Fee" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="pl-4 font-weight-bold py-1 h6">
                                Others
                            </td>
                            <td>
                                <input type="number" value="0" name="others" placeholder="Others" class="form-control fee">
                            </td>
                        </tr>

                        <tr>
                            <td class="d-flex justify-content-between pl-4 font-weight-bolder py-1 pr-4 h5">
                                <a type="button" href="#" id="calc" class="btn btn-danger">Calculate</a>
                                TOTAL
                            </td>
                            <td>
                                <input required id="total" type="text" name="total" class="form-control">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input type="number" name="paid" placeholder="Paid" class="form-control">
                            </td>
                            <td>
                                <input type="number" name="balance" placeholder="Balance" class="form-control">
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
                            <input type="date" name="date" placeholder="Date" class="form-control">
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
                            <button  type="submit" value="Submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
                        </td>
                    </tr>
                </table>
            </div>


        </form>

    
        </div>
    </div>

    
</section>

@endsection


@section('js')
<script src=" https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('#submit').click(function(e){
        // e.preventDefault()
        swal({
        title: "Do You Want To Print Receipt?",
        text: "",
        icon: "alert",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            printJS('print_form', 'html')
            // return false;
        } else {
            swal("Submitting Form. Please Wait.......");
        }
        });
        
    })
    $('#calc').click(function(e){
        e.preventDefault()
        var total=0
        $('input.fee').each(function(ind, e){
            total= total+parseFloat($(this).val())
            console.log(parseFloat($(this).val()))
            $("input#total").val(total)
        })


        return false;
    })
</script>

@endsection