<!--header-->
<?php $this->load->view('layout/header');?>
    <!--Main content-->
        <div class="content">
            <div class="cont_bx">
                <h1>The right destination for you and your family</h1>
                <p>Creative taglines have the capability of capturing the attention of potential customers.</p>
                <button>Start your search</button>
            </div>

            <div class="trip_bx">
                <div class="search_bx">
                    <div class="card">
                        <h4>Location <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="text" placeholder="Enter your destination" id="destination">
                    </div>
                    <div class="card">
                        <h4>Start Date <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="date" id="startDate">
                    </div>
                    <div class="card">
                        <h4>End-Date <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="date" id="endDate">
                    </div>

                    <div class="card">
                        <h4>People <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="number" placeholder="How many people?" id="people">
                    </div>
                    <input type="button" value="Explore Now"  id="submit">
                </div>


            <script>

         let destination = document.getElementById('destination');
         let startDate = document.getElementById('startDate');
         let endDate = document.getElementById('endDate');
         let people = document.getElementById('people');                  
         let submit = document.getElementById('submit');

         submit.addEventListener('click' , () => {

            if (destination.value !=  '' && startDate.value !=
             '' && endDate.value !=
            '' && people.value != '') {
           
                let a = document.createElement('a');
                a.href = `<?php echo base_url('Welcome/result');?>?${destination.value}?${startDate.value}?${endDate.value}?${people.value}`;
                a.click();

            } else{
             alert('Please fill all inputs')
            }

         })
         
              

            </script>

            <div class="travel_bx">
                <h4>Places to travel</h4>
                <div class="cards">
                    <div class="card">
                        <h3>Pokhara <img src="<?= base_url('assests/logo.png');?>" alt=""></h3>
                        <img src="<?= base_url('assests/bc2.png');?>" alt="">
                        <div class="btn_city">
                         <a href="<?= base_url('destination/view/pokhara'); ?>" class="btn btn-primary">Read Now</a>


                        </div>
                    </div>

                    <div class="card">
                        <h3>Kathmandu <img src="<?= base_url('assests/logo.png');?>" alt=""></h3>
                        <img src="<?= base_url('assests/bc3.png');?>" alt="">
                        <div class="btn_city">
                          <a href="<?= base_url('destination/kathmandu'); ?>">Read Now</a>


                        </div>
                    </div>

                    <div class="card">
                        <h3>Shindhupalchowk <img src="<?= base_url('assests/logo.png');?>" alt=""></h3>
                        <img src="<?= base_url('assests/bc4.png');?>" alt="">
                        <div class="btn_city">
                            <a href="<?= base_url('destination/sindhupalchok'); ?>">Read Now</a>

                        </div>
                    </div>

                    <div class="card">
                        <h3>Mustang <img src="<?= base_url('assests/logo.png');?>" alt=""></h3>
                        <img src="<?= base_url('assests/bc5.png');?>" alt="">
                        <div class="btn_city">
                      <a href="<?= base_url('destination/mustang'); ?>">Read Now</a>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="offers">
        <h1>Best tour package offers for you</h1>
        <h3><p>Choose your next destination</p></h3>

        <div class="cards">
            <div class="card">
                <h3>Kathmandu</h3>
                <div class="img_text">
                    <img src="<?= base_url('assests/ktm.png');?>" alt="">
                    <h4>Included: Air ticket, Breakfast, Tour, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-suit-heart-fill"><span>32k</span></i>
                            <i class="bi bi-chat-fill"><span>10k</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More Info</a>
                            <h4>Rs2648</h4>
                        </div>
                    </div>
                    <div class="days">5 days<br>Kathmandu</div>
                </div>
            </div>

            <div class="card">
                <h3>Pokhara</h3>
                <div class="img_text">
                    <img src="<?= base_url('assests/pokhara.png');?>" alt="">
                    <h4>Included: Air ticket, Breakfast, Tour, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-suit-heart-fill"><span>32k</span></i>
                            <i class="bi bi-chat-fill"><span>10k</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More Info</a>
                            <h4>Rs2648</h4>
                        </div>
                    </div>
                    <div class="days">2 days<br>Pokhara</div>
                </div>
            </div>

            <div class="card">
                <h3>Solukhumbu</h3>
                <div class="img_text">
                    <img src="<?= base_url('assests/solukhumbu.png');?>" alt="">
                    <h4>Included: Air ticket, Breakfast, Tour, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-suit-heart-fill"><span>42k</span></i>
                            <i class="bi bi-chat-fill"><span>25k</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More Info</a>
                            <h4>Rs2648</h4>
                        </div>
                    </div>
                    <div class="days">5 days<br>Solukhumbu</div>
                </div>
            </div>

            <div class="card">
                <h3>Lumbini</h3>
                <div class="img_text">
                    <img src="<?= base_url('assests/lumbini.png');?>" alt="">
                    <h4>Included: Air ticket, Breakfast, Tour, Airport Transfer</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-suit-heart-fill"><span>39k</span></i>
                            <i class="bi bi-chat-fill"><span>20k</span></i>
                        </div>
                        <div class="info_price">
                            <a href="">More Info</a>
                            <h4>Rs2648</h4>
                        </div>
                    </div>
                    <div class="days">2 days<br>Lumbini</div>
                </div>
            </div>
        </div>
    </div>

    <div class="destination">
        <div class="des_bx">
            <h4>Our Destination</h4>
            <p>Choose your next destination</p>


            <li>Haleshi Temple</li>
            <li>Chitwan National Park</li>
            <li>Everest Base Camp</li>
            <li>Langtang Valley</li>
            <li>Rara Lake</li>
            <li>Gosaikunda</li>
            <h6>Included: Air ticket, Breakfast, Tour, Airport Transfer</h6>
            <button>MORE INFO</button>
        </div>
        <div class="img_bx">
           <img src="<?= base_url('assests/plane.png');?>" alt="">

           <div class="msg">
         <img src="<?= base_url('assests/nepal.png');?>" alt="">

            <div class="cont">
           <h4>Nepal</h4>
           <div class="icon">
              <i class="bi bi-suit-heart-fill"><span>39k</span></i>
                        <i class="bi bi-chat-fill"><span>20k</span></i>
           </div>
        </div>
    </div>


          <div class="msg">
          <img src="<?= base_url('assests/u.png');?>" alt="">

            <div class="cont">
           <h4>United-state</h4>
           <div class="icon">
              <i class="bi bi-suit-heart-fill"><span>39k</span></i>
                        <i class="bi bi-chat-fill"><span>20k</span></i>
           </div>
        </div>
    </div>
</div>
</div>

<!--footer-->

<?php $this->load->view('layout/footer');?>