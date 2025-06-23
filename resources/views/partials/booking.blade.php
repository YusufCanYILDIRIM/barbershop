<section class="booking-section section-padding" id="booking-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-12 mx-auto">
                                <form action="{{ route('bookings.store') }}" method="post" class="custom-form booking-form" id="bb-booking-form" role="form">
                                    @csrf
                                    <div class="text-center mb-5">
                                        <h2 class="mb-1">Book a seat</h2>
                                        <p>Please fill out the form and we get back to you</p>
                                    </div>
                                    <div class="booking-form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full name" required>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Mobile 010-020-0340" required>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <input type="time" name="time" id="time" class="form-control" value="18:30" required>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <select class="form-select form-control" name="branch" id="branch" required>
                                                    <option selected disabled>Select Branches</option>
                                                    <option value="Grünberger">Grünberger</option>
                                                    <option value="Behrenstraße">Behrenstraße</option>
                                                    <option value="Weinbergsweg">Weinbergsweg</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <input type="date" name="date" id="date" class="form-control" required>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <input type="number" name="number_of_people" id="number_of_people" class="form-control" placeholder="Number of People" min="1" required>
                                            </div>
                                        </div>
                                        <textarea name="comments" rows="3" class="form-control" id="comments" placeholder="Comment (Optionals)"></textarea>
                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
