import React, {useState, useEffect}  from 'react';
import Instagram from "./Instagram";
import Card from "./Card";
import menu from "./Menu";
import { Link } from "react-router-dom";
import Menu from './Menu';
import Footer from './Footer';
import {PUPPIEIMG} from "../config";
import {petbylocation} from "./apiCore";


const Home = () => {
    const [locationResults, setLocationResults] = useState([]);
   

    const loadAllPetByLocation = () => {
        petbylocation().then(data => {
            if(data.error){
                console.log(data.error)
            } else{
                setLocationResults(data);
                console.log(data);
            }
        });
    };

    useEffect(() =>{
        loadAllPetByLocation();
    }, []);
 
    return (
      <div>
        <Menu />
        <div className='slider_area'>
          <div className='single_slider slider_bg_1 d-flex align-items-center'>
            <div className='container'>
              <div className='row'>
                <div className='col-12'>
                  <div className='slider_text'>
                    <h3>
                      Find Your <br /> <span>Perfect Match</span>
                    </h3>
                    <p>We are dedicated to matching the right pet with the right person </p>
                    <Link to='puppies-for-sale' className='boxed-btn4'>
                      View Our Puppies
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className='pricing_area'>
          <div className='container'>
            <div className='row justify-content-center '>
              <div className='col-lg-7 col-md-10'>
                <div className='section_title text-center'>
                  <h3>Available Puppies</h3>
                  <h4>
                    Puppy visitation available by <strong>Appointment Only</strong>
                  </h4>
                </div>
              </div>
            </div>

            <div className='row justify-content-center'>
              {locationResults.map((pet, i) => (
                <div key={i} className='col-lg-6 col-md-6'>
                  <div className='single-price-content'>
                    <div className='pricing-bg'>
                      <img
                        src={
                          PUPPIEIMG +
                          pet.pet_id +
                          '/image-' +
                          pet.pet_image_file_ids +
                          '-original.jpeg'
                        }
                        alt={pet.pbrd_display_name}
                        onError={(e) => {
                          e.target.src = '/img/puppy/488px-No-Image-Placeholder.png'; // some replacement image
                        }}
                      />
                    </div>
                    <div className='price-content'>
                      <h2>
                        {pet.pbrd_display_name} – {pet.pet_gender}
                      </h2>
                      <ul>
                        <li>Gender: {pet.pet_gender}</li>
                        <li>Age: {pet.pet_age}</li>
                        <li>Ref ID: {pet.pet_id}</li>
                        <li>Price : ${pet.pet_price}</li>
                      </ul>
                      <a
                        href={`/puppies-for-sale/${pet.pbrd_display_name
                          .toLowerCase()
                          .replace(/ /g, '-')
                          .replace(/\//g, '-')}-${pet.pet_id}`}
                        className='boxed-btn3 mt-4'
                      >
                        Learn More
                      </a>
                    </div>
                  </div>
                </div>
              ))}

              <div className='col-lg-6 col-md-6 text-center pb-5 mb-5'>
                <Link to='puppies-for-sale' className='boxed-btn4 '>
                  View All Puppies
                </Link>
              </div>
            </div>
          </div>
        </div>
        <div className='service_area'>
          <div className='container'>
            <div className='row justify-content-center'>
              <div className='col-lg-4 col-md-4'>
                <div className='single_service_1'>
                  <div className='text-center'>
                    <div className='service_icon'>
                      <img src='img/icon-1.svg' alt='' />
                    </div>
                  </div>
                  <div className='service_content text-center'>
                    <h3>View All Pets</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                    <Link to='puppies-for-sale' className='boxed-btn3 mt-4'>
                      View Puppies
                    </Link>
                  </div>
                </div>
              </div>
              <div className='col-lg-4 col-md-4'>
                <div className='single_service_1'>
                  <div className='text-center'>
                    <div className='service_icon'>
                      <img src='img/Financing.png' alt='' />
                    </div>
                  </div>
                  <div className='service_content text-center'>
                    <h3>Financing</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                    <Link to='/financing' className='boxed-btn3 mt-4'>
                      Apply Now
                    </Link>
                  </div>
                </div>
              </div>
              <div className='col-lg-4 col-md-4'>
                <div className='single_service_1'>
                  <div className='text-center'>
                    <div className='service_icon'>
                      <img src='img/Schedule.png' alt='' />
                    </div>
                  </div>
                  <div className='service_content text-center'>
                    <h3>Schedule a Visit</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                    <a href='#' className='boxed-btn3 mt-4'>
                      Call to Schedule
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className='shop_area'>
          <div className='container'>
            <div className='row justify-content-center '>
              <div className='col-lg-7 col-md-10'>
                <div className='section_title text-center'>
                  <h3>Shop with us</h3>
                  <h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna.
                  </h4>
                </div>
              </div>
            </div>
            <div className='row justify-content-center'>
              <div className='col-lg-6 col-md-6'>
                <div className='shop_block'>
                  <img src='img/Shop with 1.jpg' />
                  <div className='shop_content'>
                    <h3>Order Food, Supplies, and Toys Online</h3>
                    <a href='https://shop.safaristanspetcenter.com/' target='_blank'>
                      Shop Now <i className='fa fa-angle-right'></i>{' '}
                    </a>
                  </div>
                </div>
              </div>
              <div className='col-lg-6 col-md-6'>
                <div className='shop_block'>
                  <img src='img/Shop with 2.jpg' />
                  <div className='shop_content'>
                    <h3>Order Food, Supplies, and Toys Online</h3>
                    <a href='https://shop.safaristanspetcenter.com/' target='_blank'>
                      Shop Now <i className='fa fa-angle-right'></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <Instagram />
        <div className='contact_stans'>
          <div className='container'>
            <div className='row justify-content-center'>
              <div className='col-lg-8'>
                <div className='contact_text text-center'>
                  <div className='section_title text-center'>
                    <h3>Why go with Safari Stan’s?</h3>
                    <p>
                      Because we know that even the best technology is only as good as the people
                      behind it. 24/7 tech support.
                    </p>
                  </div>
                  <div className='contact_btn d-flex align-items-center justify-content-center'>
                    <Link to='/contact' className='boxed-btn4'>
                      Contact Us
                    </Link>
                    <p>
                      Or <Link to='/#'> (203)901-1003</Link>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <Footer />
      </div>
    );
}

export default Home;