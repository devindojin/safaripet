import React from 'react';
import { Helmet } from 'react-helmet';
import Menu from './Menu';
import Footer from './Footer';
export default function Thankyou() {
  return (
    <>
      <Helmet>
        <title>Thank you | Safari Pet Center</title>
      </Helmet>
      <Menu />
      <div class='slider_area'>
        <div class='single_slider contact_bg_1 d-flex align-items-center'>
          <div class='container'>
            <div class='row'>
              <div class='col-12'>
                <div class='slider_text'>
                  <h3>Thank You</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='community_desc'>
        <div class='container'>
          <div class='row justify-content-center'>
            <div class='col-lg-12 col-md-10'>
              <div class='section_title text-center'>
                <h3>Thank You For Contacting Safari Stans Pet Center</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='contact_form'>
        <div class='container'>
          <div class='row justify-content-center'>
            <div class='col-lg-6 col-12 '>
              <div class='fusion-text fusion-text-2'>
                <p>
                  <strong>We will respond to your message as soon as we can</strong>.
                </p>
                <p>
                  If you need to reach us immediately please call the store at Phone: (203)901-1003.
                  Pictures of available puppies are listed on our website.
                </p>
                <p>
                  <strong>Store Direction</strong>
                </p>
                <p>
                  If you have questions regarding our puppies, please give us a call and speak with
                  a pet counselor. They can give you all the details of our warranties and the
                  ranges they normally run for. Phone: (203)901-1003 OR Stop by the store between 10
                  am and 9 PM weekdays and Saturday or 11 AM to 6 PM Sunday.
                </p>
              </div>
            </div>
            <div class='col-lg-6 col-12'>
              <iframe
                src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5991.354600108231!2d-72.98245600000001!3d41.33763!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e7d948910bc4cf%3A0xa78f4c23e2e29ccc!2s142%20Amity%20Rd%2C%20New%20Haven%2C%20CT%2006515%2C%20USA!5e0!3m2!1sen!2sph!4v1612876400369!5m2!1sen!2sph'
                width='100%'
                height='450'
                frameborder='0'
                style={{ border: 0 }}
                allowfullscreen=''
                aria-hidden='false'
                tabindex='0'
              ></iframe>
            </div>
          </div>
          <div class='row equal justify-content-center mt-5'>
            <div class='col-lg-5 col-12'>
              <div class='box-content'>
                <p>
                  Our pet counselors are dedicated to matching the right pet with the right customer
                  and meeting the needs of both.
                </p>
                <a href='#' class='boxed-btn5'>
                  AVAILABLE PUPPIES
                </a>
              </div>
            </div>
            <div class='col-lg-5 col-12'>
              <div class='box-content'>
                <p>
                  Do you need help financing your new pet purchase? Please come in store to hear
                  about one of our awesome financing options
                </p>
                <a href='#' class='boxed-btn5'>
                  FINANCING
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <Footer />
    </>
  );
}
