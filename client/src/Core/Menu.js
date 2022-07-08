import React, { useEffect, useState } from 'react';
import { Navbar, Nav, NavDropdown, Container } from 'react-bootstrap';
import { withRouter } from 'react-router-dom';
import { pageStatus } from './apiCore';
import { getmymenu } from "./apiCore";

function Menu() {
  const [permission, setPermission] = useState([]);
  const [myMenuResult, setmyMenuResult] = useState([]);

  const loadAllMyMenus = () => {
    getmymenu().then((data) => {
      if (data.error) {
        console.log(data.error);
      } else {
        
          console.log(data.data);

        setmyMenuResult(data.data);
      }
    });
  };

  useEffect(() => {
     loadAllMyMenus();
  }, []);

  function filterpermission(item) {
    const p =
      permission &&
      permission.filter(
        (p) => p.slug.replace(/ /g, '').toLowerCase() === item.replace(/ /g, '').toLowerCase()
      );
    return p.length > 0 ? (p[0].status === 0 ? true : false) : false;
  }
  const Permissions = ({ subitem }) => {
    const showhide = filterpermission(subitem.text);
    return !showhide ? (
      <NavDropdown.Item
        {...(subitem.target !== undefined && { target: subitem.target })}
        key={`${subitem.text}-${Math.random()}`}
        href={subitem.href}
      >
        {subitem.text}
      </NavDropdown.Item>
    ) : null;
  };

  const PermissionsMenu = ({ items }) => {
    const showhide = filterpermission(items.text);
    return !showhide ? (
      <NavDropdown key={items.text} id={items.text} title={items.text} renderMenuOnMount={true}>
        {items.children.map((subitem, subindex) => {
          return <Permissions subitem={subitem} key={`${items.text}-${subindex}`} />;
        })}
      </NavDropdown>
    ) : null;
  };
  const loadPageStatus = () => {
    pageStatus().then((data) => {
      if (data.error) {
        console.log(data.error);
      } else {
        setPermission(data);
      }
    });
  };

  useEffect(() => {
    loadPageStatus();
  }, []);
  
  return (
    <div>
      <header>
        <div className='header-area'>
          <div className='header-top_area'>
            <div className='container'>
              <div className='row align-items-center'>
                <div className='col-lg-8 col-md-8'>
                  <div className='short_contact_list'>
                    <ul>
                      <li>
                        <a href='tel: 2039011003'>Call Us : 203.901.1003</a>
                      </li>
                      <li>
                        <a href='mailto:info@safaristanspetcenter.com'>
                          Email : info@safaristanspetcenter.com
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div className='col-lg-4 col-md-4 '>
                  <div className='social_media_links'>
                    <a
                      target='_blank'
                      href='https://www.facebook.com/SafariStansPets'
                      rel='noopener noreferrer'
                    >
                      <i className='fa fa-facebook'></i>
                    </a>
                    <a
                      target='_blank'
                      href='https://twitter.com/SafariStansNH'
                      rel='noopener noreferrer'
                    >
                      <i className='fa fa-twitter'></i>
                    </a>
                    <a
                      target='_blank'
                      href='https://www.youtube.com/channel/UC6wIirupjbHfkKn6jLlfwYg'
                      rel='noopener noreferrer'
                    >
                      <i className='fa fa-youtube-play'></i>
                    </a>
                    <a
                      target='_blank'
                      href='https://www.instagram.com/safaristansnewhaven/'
                      rel='noopener noreferrer'
                    >
                      <i className='fa fa-instagram'></i>
                    </a>
                    <a href='/'>
                      <i className='fa fa-envelope'></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className='notification-bar'>
          <div className='container'>
            <div className='row align-items-center'>
              <div className='col-12'>
                <p>
                  COVID 19 UPDATE: WE ARE OPEN AND THE HEALTH AND WELFARE OF OUR STAFF, OUR
                  CUSTOMERS AND PETS ARE OUR PRIMARY CONCERN. <a href='/'>READ MORE</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id='sticky_header' className='main-header-area' style={{ background: '#2fbab7' }}>
          <Container>
            <Navbar sticky='top' collapseOnSelect expand='lg'>
              <Navbar.Brand href='/'>
                <img
                  alt=''
                  src='/img/logo.png'
                  className='d-inline-block align-top'
                  style={{ width: '100%', maxWidth: '180px' }}
                />{' '}
              </Navbar.Brand>
              <Navbar.Toggle aria-controls='responsive-navbar-nav' />
              <Navbar.Collapse id='responsive-navbar-nav'>
                <Nav className='mr-auto mr-left'>
                  {myMenuResult.map((item, index) =>

                    item.children.length === 0 ? (
                      <Nav.Link
                        href={item.href}
                        key={item.text}
                        {...(item.target !== undefined && { target: item.target })}
                      >
                        {item.text}
                      </Nav.Link>
                    ) : (
                      <PermissionsMenu items={item} key={`${item.text}-${index}`} />
                    )
                  )}
                </Nav>
              </Navbar.Collapse>
            </Navbar>
          </Container>
        </div>
      </header>
    </div>
  );
}
export default withRouter(Menu);