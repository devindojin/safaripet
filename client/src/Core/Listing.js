import React, {useState, useEffect} from 'react';
import { Spin } from "antd";
import { Helmet } from "react-helmet";
import Card from "./Card";
import WhySafari from "./WhySafari";
import CheckboxList from "./Checkbox";
import Instagram from "./Instagram";
import Menu from "./Menu";
import Footer from "./Footer";
import { getFilteredPets } from "./apiCore";
import { Loader } from "./loader";

export default function Listing() {
  const [error, setError] = useState(false);
  const [filteredResults, setFilteredResults] = useState([]);
  const [isLoading, setIsLoading] = useState(false);
  const loadFilteredResults = (
    filterGenders,
    filterLocations,
    filterCollection
  ) => {
    setIsLoading(true);
    getFilteredPets(filterGenders, filterLocations, filterCollection).then(
      (data) => {
        if (data.error) {
          setIsLoading(false);
          setError(data.error);
        } else {
          setIsLoading(false);
          setFilteredResults(data);
        }
      }
    );
  };
  const _Indicator = () => {
    return (
      <div className="spinner-border text-primary" role="status">
        <span className="sr-only">Loading...</span>
      </div>
    );
  };
  useEffect(() => {
    loadFilteredResults("", "", "");
  }, []);

  return (
    <div>
      <Helmet>
        <meta charSet='utf-8' />
        <title>Available Puppies - Safari Pet Center</title>
      </Helmet>
      <Menu />
      <div className='bradcam_area breadcam_bg'>
        <div className='container'>
          <div className='row'>
            <div className='col-lg-12'>
              <div className='bradcam_text text-center'>
                <h3>Puppies For Sale</h3>
                <p>
                  At Safari Stan’s you can rest assured that your new puppy is coming from a vetted,
                  responsible breeder. We are a community of dog lovers committed to helping you
                  find the perfect puppy for your experience level, family and home.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section className='sample-text-area'>
        <div className='container'>
          <div className='row'>
            <div className='col-lg-3'></div>
            <div className='col-lg-9 col-12'>
              <div className='listing-top-bar'>
                <div className='left-toggle'>
                  <i className='ti ti-filter'></i> Filter
                </div>
                <div className='search-result'>Showing {filteredResults.length} puppies</div>
              </div>
            </div>
          </div>
          <div className='row'>
            <div className='col-lg-3'>
              <div className='card-main-header'>
                <h3 className='mt-0'>Browser By:</h3>
              </div>
              <div className='left-panel'>
                <div className='close-menu'>
                  <i className='ti ti-close'></i>
                </div>
                <CheckboxList
                  loadFilteredResults={loadFilteredResults}
                />
              </div>
            </div>
            <div className='col-lg-9 col-md-9 d-md-flex justify-content-md-center'>
              <Spin
                spinning={isLoading ? true : false}
                indicator={<Loader />}
                size={'large'}
                tip='Loading...'
                wrapperClassName='loading'
              >
                <div className='row'>
                  {filteredResults.map((pet, i) => (
                    <div key={i} className='col-lg-4 col-md-6 col-12'>
                      <Card pet={pet} />
                    </div>
                  ))}

                  {/* {loadMoreButton()} */}
                </div>
              </Spin>
            </div>
            {/* {JSON.stringify(allPets)} */}
          </div>
        </div>
      </section>

      <WhySafari />

      <Instagram />

      {/* <Testimonial/> */}

      <Footer />
    </div>
  );
};

//export default Listing;