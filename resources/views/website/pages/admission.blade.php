@extends('website.indexmaster')
@section('website')

<div class="banner-area admission">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="page-title-content">
            <h2>Admission</h2>
            <ul>
              <li>
                <a href="index.html"> Home </a>
                <i class="flaticon-fast-forward"></i>
                <p class="active">Admission</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="admission-area">
    <div class="container">
      <div class="section-tittle">
        <h2>Admission Rules</h2>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text
          ever since the 1500s, when an unknown printer took a galley of type
          and scrambled it to make a type specimen book. It has survived not
          only five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s
          with the release of Letraset sheets containing Lorem Ipsum passages,
          and more recently with desktop publishing software like Aldus
          PageMaker including versions of Lorem Ipsum.
        </p>
      </div>
      <div class="admission-form">
        <h2>Admission Form</h2>
        <form>
          <div class="row">
            <div class="form-group col-md-6">
              <label>First Name</label>
              <input
                type="text"
                class="form-control"
                id="inputEmail14"
                placeholder="First Name"
              />
            </div>
            <div class="form-group col-md-6">
              <label>Last Name</label>
              <input
                type="text"
                class="form-control"
                id="inputEmail15"
                placeholder="Last Name"
              />
            </div>
            <div class="form-group col-md-6">
              <label>Email</label>
              <input
                type="email"
                class="form-control"
                id="inputEmail16"
                placeholder="Email"
              />
            </div>
            <div class="form-group col-md-6">
              <label>Mobile</label>
              <input
                type="text"
                class="form-control"
                id="inputEmail17"
                placeholder="Mobile"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">Class Name</label>
              <select id="inputcourse" class="form-control">
                <option selected>Painting</option>
                <option>Science</option>
                <option>Music</option>
                <option>Art</option>
                <option>Dance</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label>Join Date</label>
              <input type="date" max="2095-12-31" class="form-control" />
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for="inputAddress2">Address</label>
            <input
              type="text"
              class="form-control"
              id="inputAddress2"
              placeholder="Address"
            />
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity" />
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">State</label>
              <select id="inputState" class="form-control">
                <option selected>London</option>
                <option>Birmingham</option>
                <option>Liverpool</option>
                <option>Nottingham</option>
                <option>Cardiff</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip" />
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" />
            <label class="form-check-label" for="gridCheck">
              agree to all terms and conditions
            </label>
          </div>
          <a href="#" class="box-btn">Registation</a>
        </form>
      </div>
    </div>
  </section>

  <section class="home-contact-area pb-100">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 ps-0">
          <div class="contact-img">
            <img src="{{asset('frontend/assets/images/contact.png')}}" alt="contact" />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="home-contact-content">
            <h2>What Do You Want to Know?</h2>
            <form id="contactForm">
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <input
                      type="text"
                      name="name"
                      id="name"
                      class="form-control"
                      required
                      data-error="Please enter your name"
                      placeholder="Your Name"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <input
                      type="email"
                      name="email"
                      id="email"
                      class="form-control"
                      required
                      data-error="Please enter your email"
                      placeholder="Your Email"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <input
                      type="text"
                      name="phone_number"
                      id="phone_number"
                      required
                      data-error="Please enter your number"
                      class="form-control"
                      placeholder="Your Phone"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <input
                      type="text"
                      name="msg_subject"
                      id="msg_subject"
                      class="form-control"
                      required
                      data-error="Please enter your subject"
                      placeholder="Your Subject"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <textarea
                      name="message"
                      class="form-control"
                      id="message"
                      cols="30"
                      rows="5"
                      required
                      data-error="Write your message"
                      placeholder="Your Message"
                    ></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <button type="submit" class="default-btn page-btn box-btn">
                    Send Message
                  </button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection