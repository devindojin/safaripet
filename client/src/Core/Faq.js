import React  from 'react';
import {Helmet} from 'react-helmet';
import Menu from './Menu';
import Footer from './Footer';

const About = () => {
    return (
      <div>
        <Helmet>
          <meta charSet='utf-8' />
          <title>Faq - Safari Pet Center</title>
        </Helmet>
        <Menu />
        <div className='slider_area'>
          <div className='single_slider faq_bg_1 d-flex align-items-center'>
            <div className='container'>
              <div className='row'>
                <div className='col-12'>
                  <div className='slider_text'>
                    <h3>
                      FAQ <br /> <span></span>
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className='community_desc pt-3'>
          <div className='container'>
            <div className='row justify-content-center py-5'>
              <div className='col-lg-12'>
                <div className='faq-row'>
                  <div className='faq-ques mb-2'>
                    <h4>Q: Will my puppy be registered?</h4>
                  </div>
                  <div className='faq-ans'>
                    <p>
                      <b>A:</b> All of our puppies can be registered thru the AKC or the AKC’s
                      Canine Partners. The registration process will automatically be started at the
                      time of purchase.
                    </p>
                  </div>
                </div>
                <div className='faq-row'>
                  <div className='faq-ques mb-2'>
                    <h4>Q: What does it mean to have a registered puppy?</h4>
                  </div>
                  <div className='faq-ans'>
                    <p>
                      <b>A:</b> Buying a registered, purebred puppy means that its family tree is
                      documented as being exclusively one breed. Buying a registered dog does not
                      necessarily mean that the dog will be healthier than a non-registered dog. It
                      means that its parents are of the same breed and that the dog comes from a
                      purebred line. AKC (American Kennel Club) is the most familiar purebred dog
                      registry in the country. There are several other dog registries such as ACA,
                      APR, UKC that also register purebred dogs.
                    </p>
                  </div>
                </div>
                <div className='faq-row'>
                  <div className='faq-ques mb-2'>
                    <h4>Q: Will my puppy be microchipped?</h4>
                  </div>
                  <div className='faq-ans'>
                    <p>
                      <b>A:</b> The microchip registration will begin at the time of purchase. It is
                      extremely important to register your puppies microchip. If your puppy should
                      ever become lost, there is a good chance that your puppy will be recovered if
                      it has a registered microchip. In a pets lifetime, one out of three will
                      become lost. Without enrollment registration and identification about ninety
                      percent will not be recovered.
                    </p>
                  </div>
                </div>
                <div className='faq-row'>
                  <div className='faq-ques mb-2'>
                    <h4>Q: What breeds are best for people who have allergies?</h4>
                  </div>
                  <div className='faq-ans'>
                    <p>
                      <b>A:</b> People who have allergies should consider dogs that shed very
                      little. Breeds to consider are: Bichon Frise, Maltese, Yorkshire Terrier,
                      Poodle, Miniature Schnauzer, Soft Coated Wheaten Terrier, Shih Tzu, and mixes
                      of these types
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div className='row justify-content-center align-items-center'>
              <div className='col-lg-8'>
                <div className='contact-blog'>
                  <p>
                    If you have any other questions regarding pets or pet care, please contact us:
                  </p>
                  <a href='/' className='boxed-btn5'>
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <Footer />
      </div>
    );
}


export default About;