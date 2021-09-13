import React, { useState, useEffect, useRef } from "react";
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import { gettestimonials } from "./apiCore";
import { IMG } from '../config';

const Testimonial = () => {
  const [testimonialResults, setTestimonialResults] = useState([]);
  const [isShowTestimonial, setIsShowTestimonial] = useState([]);
  const slider = useRef(null);

  const settings = {
    className: "center",
    centerPadding: "300px",
    centerMode: true,
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    adaptiveHeight: true,
  };

  const loadAllTestimonials = () => {
    gettestimonials().then((data) => {
      if (data.error) {
        console.log(data.error);
      } else {
        setTestimonialResults(data.data);
        setIsShowTestimonial(data.isShowTestimonial);
      }
    });
  };

  const next = () => {
    slider.current.slickNext();
  };
  const previous = () => {
    slider.current.slickPrev();
  };

  useEffect(() => {
    loadAllTestimonials();
  }, []);
  console.log(isShowTestimonial);
  let testimonialHtml = "";
  if(isShowTestimonial == true) {
    testimonialHtml = <div className="testmonial_area">
        <div className="container-fluid">
          <div className="row justify-content-center">
            <div className="col-md-12">
              <div className="section_title text-center pt-0 pb-3">
                <h3 className="text-center">Testmonials</h3>
              </div>
            </div>

            <div className="col-lg-12">
              <div className="textmonial_active owl-carousel">
                <Slider {...settings} arrows={false} ref={slider}>
                  {testimonialResults.map((client, i) => (
                    <div key={`_testi_${i}`}>
                      <div className="testmonial_wrap">
                        <div className="single_testmonial d-flex align-items-center">
                          <div className="test_thumb">
                            <img src={IMG + '/' + client.image} alt="" />
                          </div>
                          <div className="test_content">
                            <h4>{client.client_name}</h4>
                            <span>{client.title}</span>
                            <p>{client.description}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  ))}
                </Slider>
                <div className="owl-nav">
                  <div className="owl-prev" onClick={(e) => previous()}>
                    <i className="ti-arrow-left"></i>
                  </div>
                  <div className="owl-next" onClick={(e) => next()}>
                    <i className="ti-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>;
  }

  return (
    <>
      {testimonialHtml}
    </>
  );
};

export default Testimonial;
