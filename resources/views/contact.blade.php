@extends('layouts.main')
@section('content')
    <header class="site-header sticky-top">
        @include('partials.navbar')
    </header>

    <main>
        <div class="container py-4">
            <div class="back_cont p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Contact Info</h1>
                    <p class="col-md-8 fs-4">If you want to know more about us, you can contact us via email, phone number,
                        or our social media below.</p>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="back_cont2 fs-5 h-100 p-5 bg-light border rounded-3">
                        <table>
                            <tr>
                                <td><b>Address</td>
                                <td>: 1100 Kingsbury St, Austin, TX 78703, USA</td>
                            </tr>
                            <tr>
                                <td><b>Phone</td>
                                <td>: +1 234 567 8910</td>
                            </tr>
                            <tr>
                                <td><b>Email</td>
                                <td>: info@quins.com</td>
                            </tr>
                            <tr>
                                <td><b>Facebook</td>
                                <td>: Quins Page</td>
                            </tr>
                            <tr>
                                <td><b>Instagram</td>
                                <td>: @quins.official</td>
                            </tr>
                            <tr>
                                <td><b>Youtube</td>
                                <td>: Quins Official</td>
                            </tr>
                            <tr>
                                <td><b>Twitter</td>
                                <td>: @quins.on_twitter</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2>Still have question?</h2>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="input_email" placeholder="name@example.com"
                                aria-describedby="send_quest">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="input_quest" rows="3" aria-describedby="send_quest"></textarea>
                        </div>
                        <button class="btn btn-outline-light" type="button" id="send_quest" value="Submit">Send
                            Question</button>
                    </div>
                </div>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">&copy; 2021 - 2022</footer>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            var all_quest = [];

            $("#send_quest").on("click", function() {
                var email_accept = document.getElementById("input_email").value;
                var quest_accept = document.getElementById("input_quest").value;

                var message = {
                    email: email_accept,
                    question: quest_accept
                };

                var pola = /\b@\b/gi; // mengandung @
                var hasil = pola.test(message.email);

                console.log(hasil)

                hasil ? all_quest.push(message) : console.log("Wrong Email!"); // ternary

                if (hasil) { // ==
                    localStorage.setItem("message", JSON.stringify(all_quest));
                };

                var obj_all_quest = JSON.parse(localStorage.getItem("all_quest"));

                if (all_quest === obj_all_quest) { // mengecek apakah tipe datanya
                    obj_all_quest.forEach(function(message) {
                        console.log(message);
                    });
                };

                $("input").on("click", function() {
                    var isi_input = $(this).val();
                    $(this).val("");
                });

                $("textarea").on("click", function() {
                    var isi_input = $(this).val();
                    $(this).val("");
                });
            });
        });
    </script>
@endsection
