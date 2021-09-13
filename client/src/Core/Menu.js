import React from 'react';
import { Navbar, Nav, NavDropdown, Container } from 'react-bootstrap'
import {Link, withRouter} from 'react-router-dom';


const menu = () =>(
    <div>
        <header>
                <div className="header-area">
                    <div className="header-top_area">
                        <div className="container">
                            <div className="row align-items-center">
                                <div className="col-lg-8 col-md-8">
                                    <div className="short_contact_list">
                                        <ul>
                                            <li><a href="tel: 2039011003">Call Us : 203.901.1003</a></li>
                                            <li><a href="mailtp:info@safarstanspetcenter.com">Email :
                                                    info@safarstanspetcenter.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="col-lg-4 col-md-4 ">
                                    <div className="social_media_links">
                                        <a target='_blank' href="https://www.facebook.com/SafariStansPets">
                                            <i className="fa fa-facebook"></i>
                                        </a>
                                        <a target='_blank' href="https://twitter.com/SafariStansNH">
                                            <i className="fa fa-twitter"></i>
                                        </a>
                                        <a target='_blank' href="https://www.youtube.com/channel/UC6wIirupjbHfkKn6jLlfwYg">
                                            <i className="fa fa-youtube-play"></i>
                                        </a>
                                        <a target='_blank' href="https://www.instagram.com/safaristansnewhaven/">
                                            <i className="fa fa-instagram"></i>
                                        </a>
                                        <a href="#">
                                            <i className="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="notification-bar">
                    <div className="container">
                        <div className="row align-items-center">
                            <div className="col-12">
                                <p>COVID 19 UPDATE: WE ARE OPEN AND THE HEALTH AND WELFARE OF OUR STAFF, OUR CUSTOMERS AND
                                    PETS ARE OUR PRIMARY CONCERN. <a href="#">READ MORE</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticky_header" className="main-header-area" style={{background: '#2fbab7'}}>
                    <Container>
                        <Navbar sticky="top" collapseOnSelect expand="lg">
                            <Navbar.Brand href="/">
                            <img
                                alt=""
                                src="/img/logo.png"
                                className="d-inline-block align-top"
                                style={{width: '100%', maxWidth: '180px'}}
                            />{' '}
                            </Navbar.Brand>
                            <Navbar.Toggle aria-controls="responsive-navbar-nav" />
                            <Navbar.Collapse id="responsive-navbar-nav">
                                <Nav className="mr-auto mr-left">
                                <Nav.Link href="/">Home</Nav.Link>
                                <NavDropdown title="Shop" id="collasible-nav-dropdown" renderMenuOnMount={true}>
                                    <NavDropdown.Item target='_blank' href="https://shop.safaristanspetcenter.com/">Shop Online</NavDropdown.Item>
                                    <NavDropdown.Item href="/puppies-for-sale">Shop at Your Local Store</NavDropdown.Item>
                                </NavDropdown>
                                <Nav.Link href="/puppies-for-sale">Available Puppies</Nav.Link>
                                <NavDropdown title="We Care" id="collasible-nav-dropdown" renderMenuOnMount={true}>
                                    <NavDropdown.Item href="/our-veterinarian">Veterinarian</NavDropdown.Item>
                                    <NavDropdown.Item href="/breeders">Breeders</NavDropdown.Item>
                                    <NavDropdown.Item href="/community">Community Services</NavDropdown.Item>
                                </NavDropdown>
                                <Nav.Link href="/financing">Financing</Nav.Link>
                                <NavDropdown title="About" id="collasible-nav-dropdown" renderMenuOnMount={true}>
                                    <NavDropdown.Item href="/about">About Us</NavDropdown.Item>
                                    <NavDropdown.Item href="/faq">Faq</NavDropdown.Item>
                                </NavDropdown>
                                <Nav.Link href="/contact">Contact</Nav.Link>
                                <Nav.Link href="http://endlesspetcare.com/" target='_blank'>Endless Petcare</Nav.Link>
                                </Nav>
                            </Navbar.Collapse>
                        </Navbar>
                    </Container>
                </div>
        </header>
    </div>
);

export default withRouter(menu);