import React from 'react';
import { useHistory } from 'react-router-dom';
import { Helmet } from 'react-helmet';
import Menu from './Menu';
import Footer from './Footer';
import { sendMessage } from './apiCore';

const Contact = () => {
  // form variables
  const history = useHistory();
  const f_name = React.useRef(null);
  const l_name = React.useRef(null);
  const phone = React.useRef(null);
  const email = React.useRef(null);
  const subject = React.useRef(null);
  const description = React.useRef(null);

  // form submit handler
  const handleSubmit = (e) => {
    e.preventDefault();

    const data = {
      f_name: f_name.current.value,
      l_name: l_name.current.value,
      phone: phone.current.value,
      email: email.current.value,
      subject: subject.current.value,
      description: description.current.value,
    };

    sendMessage(data).then((data) => {
      history.push('/thank-you');
      if (data) {
      }
    });
  };

  const newPostForm = () => (
    <form onSubmit={handleSubmit}>
      <div className='row justify-content-center'>
        <div className='col-lg-6 col-12 '>
          <div className='form-group mb-4'>
            <input
              type='text'
              ref={f_name}
              className='form-control'
              placeholder='First Name*'
              required
            />
          </div>
          <div className='form-group mb-4'>
            <input
              type='text'
              ref={phone}
              className='form-control'
              placeholder='Phone Number*'
              required
            />
          </div>
        </div>
        <div className='col-lg-6 col-12'>
          <div className='form-group mb-4'>
            <input
              type='text'
              ref={l_name}
              className='form-control'
              placeholder='Last Name*'
              required
            />
          </div>
          <div className='form-group mb-4'>
            <input
              type='text'
              className='form-control'
              ref={email}
              placeholder='Email Address*'
              required
            />
          </div>
        </div>
        <div className='col-lg-12'>
          <div className='form-group mb-4'>
            <select className='form-control' ref={subject} name='subject' required>
              <option value=''>Subject*</option>
              <option value='General Inquiry'>General Inquiry</option>
              <option value='Special Puppy Order Inquiry'>Special Puppy Order Inquiry</option>
              <option value='FAQ'>FAQ</option>
            </select>
          </div>
        </div>
        <div className='col-lg-12'>
          <div className='form-group mb-4'>
            <textarea
              className='form-control'
              rows='5'
              ref={description}
              placeholder='Message*'
              required
            ></textarea>
          </div>
        </div>
      </div>
      <div className='row justify-content-center'>
        <div className='col-lg-6 col'>
          <div
            className='g-recaptcha'
            data-sitekey='6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ'
          ></div>
        </div>
        <div className='col-lg-6 col'>
          <div className=''>
            <input className='boxed-btn4 btn-contact' type='submit' value='Submit' />
          </div>
        </div>
      </div>
    </form>
  );

  return (
    <div>
      <Helmet>
        <meta charSet='utf-8' />
        <title>Contact Us | Safari Pet Center</title>
      </Helmet>
      <Menu />
      <div className='slider_area'>
        <div className='single_slider contact_bg_1 d-flex align-items-center'>
          <div className='container'>
            <div className='row'>
              <div className='col-12'>
                <div className='slider_text'>
                  {/* <!-- <h3>Contact <br/> <span>Us</span></h3> --> */}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className='community_desc'>
        <div className='container'>
          <div className='row justify-content-center'>
            <div className='col-lg-7 col-md-10'>
              <div className='section_title text-center'>
                <h3>Contact Us</h3>
                <h4>We’d love to hear from you. We are here to help.</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className='contact_form'>
        <div className='container'>{newPostForm()}</div>
      </div>

      <div className='endless-petcare'>
        <div className='container'>
          <div className='row justify-content-center'>
            <div className='col-lg-7 col-md-10'>
              <div className='section_title text-center'>
                <h4 className='text-skyblue'>
                  For Any Customer Service Issues, Warranty, Claims, contact:
                </h4>
                <img src='img/endless-petcare-logo.png' alt='' />
              </div>
            </div>
          </div>
        </div>
      </div>
      <Footer />
    </div>
  );
};

export default Contact;
