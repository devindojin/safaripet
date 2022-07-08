import React, {useState, useEffect} from 'react';
import { Formik, Field, Form, ErrorMessage } from 'formik';
import * as Yup from 'yup';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Helmet } from 'react-helmet';
import WhySafari from './WhySafari';
import Instagram from './Instagram';
import Testimonial from './Testimonial';
import { PUPPIEIMG } from '../config';
import Menu from './Menu';
import Footer from './Footer';
import { read, petInquiry } from './apiCore';
import { Link, useHistory } from 'react-router-dom';
import 'swiper/swiper-bundle.min.css';
import SwiperCore, { EffectFade, Thumbs } from 'swiper/core';
SwiperCore.use([EffectFade, Thumbs]);
const SinglePet = (props) => {
  const history = useHistory();
  const [thumbsSwiper, setThumbsSwiper] = useState(null);
  const [singlepet, setSinglePet] = useState({});
  const [pagetitle, setPagetitle] = useState('');
  // const [error, setError] = useState(false);
  const [send, setSend] = useState(true);
  // form variables
  const breed = React.useRef(null);
  const gender = React.useRef(null);
  const pet_id = React.useRef(null);
  const color = React.useRef(null);
  const birth_date = React.useRef(null);
  const location = React.useRef(null);
  const first_name = React.useRef(null);
  const last_name = React.useRef(null);
  const phone = React.useRef(null);
  const email = React.useRef(null);
  const message = React.useRef(null);
  // const [initVals, setInitVals] = useState({
  //   first_name: '',
  //   last_name: '',
  //   phone: '',
  //   email: '',
  //   message: '',
  // });
  let initialValues = {
    first_name: '',
    last_name: '',
    phone: '',
    email: '',
    message: '',
  };
  const validationSchema = Yup.object().shape({
    first_name: Yup.string().required('First name is required'),
    last_name: Yup.string().required('Last name is required'),
    email: Yup.string().email('Email is invalid').required('Email is required'),
    phone: Yup.number('Must be number').required('Phone number is required'),
    message: Yup.string().required('Message  is required'),
  });

  // form submit handler
  const handleSubmit = (fields, { setSubmitting }) => {
    const data = {
      breed: breed.current.value,
      gender: gender.current.value,
      pet_id: pet_id.current.value,
      color: color.current.value,
      birth_date: birth_date.current.value,
      location: location.current.value,
      first_name: fields.first_name,
      last_name: fields.last_name,
      phone: fields.phone,
      email: fields.email,
      message: fields.message,
    };

    petInquiry(data).then((res) => {
      setSend(false);
      history.push('/thank-you');
    });
  };

  const loadSinglePet = (pet_id) => {
    read(pet_id).then((data) => {
      if (data.error) {
        //  setError(data.error);
      } else {
        setSinglePet(data);
      }
    });
  };

  let priceSection = '';
  if (singlepet.isPrice === 1) {
    priceSection = (
      <ul className='dtails-price'>
        <li
          className='real-price'
          style={singlepet.pet_price === null ? { display: 'none' } : { display: 'block' }}
        >
          ${singlepet && singlepet.pet_price}
        </li>
      </ul>
    );
  }

  useEffect(() => {
    const pet_id = props.match.params.pet_id.split('-').pop();
    loadSinglePet(pet_id);
    setPagetitle(singlepet.pbrd_display_name);
  }, [props, singlepet.pbrd_display_name]);

  const img_ids = singlepet.pet_image_file_ids;
  let images_list = '';
  let img_thumbnail = '';

  if (img_ids) {
    images_list = img_ids.map((image_id) => (
      <SwiperSlide>
        <a
          href={PUPPIEIMG + singlepet.pet_id + '/image-' + image_id + '-original.jpeg'}
          data-fancybox='group1'
        >
          <img
            src={PUPPIEIMG + singlepet.pet_id + '/image-' + image_id + '-original.jpeg'}
            onError={(e) => {
              e.target.src = '/img/puppy/488px-No-Image-Placeholder.png'; // some replacement image
            }}
            alt=''
          />
        </a>
      </SwiperSlide>
    ));
    img_thumbnail = img_ids.map((image_id) => (
      <SwiperSlide>
        <img alt='' src={PUPPIEIMG + singlepet.pet_id + '/image-' + image_id + '-74X90.jpeg'} />
      </SwiperSlide>
    ));
  }

  const NewPostForm = () => {
    return send ? (
      <Formik
        initialValues={initialValues}
        validationSchema={validationSchema}
        onSubmit={handleSubmit}
      >
        {({ errors, status, touched }) => (
          <Form className='form-contact comment_form' noValidate>
            <div className='row'>
              <input type='hidden' ref={breed} value={singlepet.pbrd_display_name} />
              <input type='hidden' ref={gender} value={singlepet.pet_gender} />
              <input type='hidden' ref={pet_id} value={singlepet.pet_id} />
              <input type='hidden' ref={color} value={singlepet.pet_color_markings} />
              <input type='hidden' ref={birth_date} value={singlepet.plttr_birthdate} />
              <input type='hidden' ref={location} value={singlepet.loc_addr_city} />
              <div className='col-sm-6'>
                <div className='form-group'>
                  <Field
                    className={
                      'form-control' +
                      (errors.first_name && touched.first_name ? ' is-invalid' : '')
                    }
                    maxLength='20'
                    type='text'
                    placeholder='First Name'
                    ref={first_name}
                    name='first_name'
                  />
                  <ErrorMessage name='first_name' component='div' className='invalid-feedback' />
                </div>
              </div>
              <div className='col-sm-6'>
                <div className='form-group'>
                  <Field
                    className={
                      'form-control' + (errors.last_name && touched.last_name ? ' is-invalid' : '')
                    }
                    type='text'
                    maxLength='25'
                    placeholder='Last Name'
                    ref={last_name}
                    name='last_name'
                    required
                  />
                  <ErrorMessage name='last_name' component='div' className='invalid-feedback' />
                </div>
              </div>

              <div className='col-sm-6'>
                <div className='form-group'>
                  <Field
                    className={
                      'form-control' + (errors.phone && touched.phone ? ' is-invalid' : '')
                    }
                    maxLength='10'
                    type='text'
                    placeholder='Phone Number'
                    ref={phone}
                    name='phone'
                    required
                  />
                  <ErrorMessage name='phone' component='div' className='invalid-feedback' />
                </div>
              </div>
              <div className='col-sm-6'>
                <div className='form-group'>
                  <Field
                    className={
                      'form-control' + (errors.email && touched.email ? ' is-invalid' : '')
                    }
                    type='email'
                    placeholder='Email Address'
                    ref={email}
                    name='email'
                    required
                  />
                  <ErrorMessage name='email' component='div' className='invalid-feedback' />
                </div>
              </div>
              <div className='col-12'>
                <div className='form-group'>
                  <Field
                    as='textarea'
                    className={
                      'form-control w-100' +
                      (errors.message && touched.message ? ' is-invalid' : '')
                    }
                    ref={message}
                    name='message'
                    cols='30'
                    rows='9'
                    placeholder='eg: I like this dog and tell me details'
                  ></Field>
                  <ErrorMessage name='message' component='div' className='invalid-feedback' />
                </div>
              </div>
            </div>
            <div className='form-group text-right'>
              <input className='boxed-btn3' type='submit' value='Submit' />
            </div>
          </Form>
        )}
      </Formik>
    ) : (
      <div className='alert alert-info'>Thank you for contact us</div>
    );
  };

  return (
    <>
      <Helmet>
        <meta charSet='utf-8' />
        <title>{`${pagetitle !== undefined ? pagetitle : ''}`} | Safari Pet Center</title>
      </Helmet>
      <Menu />
      <div className='bradcam_area breadcam_bg'>
        <div className='container'>
          <div className='row'>
            <div className='col-lg-12'>
              <div className='bradcam_text text-center'>
                <h3>{singlepet && singlepet.pbrd_display_name}</h3>
                <ul>
                  <li>
                    <Link to='/'>Home</Link> <i className='ti-angle-right'></i>{' '}
                  </li>
                  <li>
                    <Link to='/puppies-for-sale'>Puppies for sale</Link>{' '}
                    <i className='ti-angle-right'></i>{' '}
                  </li>
                  <li>
                    <a href='/'>{singlepet && singlepet.pbrd_display_name}</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* {JSON.stringify(singlepet)}  */}
      <section className='sample-text-area'>
        <div className='container'>
          <div className='row'>
            <div className='col-lg-6'>
              <div className='gallery-container'>
                <Swiper
                  spaceBetween={20}
                  navigation={false}
                  thumbs={{ swiper: thumbsSwiper }}
                  className='swiper-container gallery-main'
                  effect='fade'
                >
                  {images_list}
                </Swiper>
                {/* <div className='swiper-container gallery-main'>
                  <div className='swiper-wrapper'>{images_list}</div>
                </div> */}
                <div className='left-thumb'>
                  <Swiper
                    onSwiper={setThumbsSwiper}
                    spaceBetween={5}
                    slidesPerView={6}
                    freeMode={true}
                    watchSlidesVisibility={true}
                    watchSlidesProgress={true}
                    className='swiper-container gallery-thumbs'
                  >
                    {img_thumbnail}
                  </Swiper>
                </div>
              </div>
            </div>
            <div className='col-lg-6'>
              <div className='product-details'>
                <h1>{singlepet && singlepet.pbrd_display_name}</h1>
                {priceSection}
                <div className='product-specification'>
                  <h4>
                    <strong>Puppy Id : </strong> #{singlepet && singlepet.pet_id}
                  </h4>
                  <h4>
                    <strong>Color : </strong> {singlepet && singlepet.pet_color_markings}
                  </h4>
                  <h4>
                    <strong>DOB : </strong> {singlepet && singlepet.plttr_birthdate}
                  </h4>
                  <h4>
                    <strong>Location : </strong> {singlepet && singlepet.loc_addr_city}{' '}
                  </h4>
                </div>
                <div className='call-section'>
                  <div className='call-left'>
                    <img src='/img/phone.svg' alt='' />
                    <h4>Need a nuppy guidience? </h4>
                  </div>
                  <div className='call-right'>
                    <span>
                      <a href='tel:{singlepet.loc_contact_numbers && singlepet.loc_contact_numbers.Office}'>{singlepet.loc_contact_numbers && singlepet.loc_contact_numbers.Office}</a>
                    </span>
                    {/* <a href="#" className="boxed-btn3">Financing Available</a> */}
                  </div>
                </div>
                <div className='d-flex detail-btn'>
                  <a href='/financing' className='boxed-btn3'>
                    Financng Available
                  </a>
                </div>
                <div className='decription-parra'>
                  <h4>Description :</h4>
                  <p>
                    {singlepet && singlepet.brdnt_desc}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div className='form-area'>
        <div className='container'>
          <div className='row justify-content-center '>
            <div className='col-md-12'>
              <div className='section_title text-center mb-5'>
                <h3>I am interested in the {singlepet && singlepet.pbrd_display_name}</h3>
              </div>
            </div>
          </div>
          <div className='row justify-content-center'>
            <div className='col-lg-12'>
              <NewPostForm />
            </div>
          </div>
        </div>
      </div>

      <WhySafari />

      <Testimonial />

      <Instagram />

      <Footer />
    </>
  );
};

export default SinglePet;
