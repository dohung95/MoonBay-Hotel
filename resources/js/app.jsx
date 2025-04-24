import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import ReactDOM from 'react-dom/client';
import 'bootstrap/dist/css/bootstrap.min.css';

import NavBar from './Components/NavBar';
import Footer from './Components/Footer';
import Home from './Components/Home';
import AboutUs from './Components/AboutUs';
import OurHotels from './Components/ourhotels';
import Rooms from './Components/rooms';
import ContactUsPage from './Components/ContactUsPage';
import ServicePage from './Components/ServicesPage';

function App() {
  return (
    <BrowserRouter>
      <NavBar />
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/About" element={<AboutUs />} />
        <Route path="/Ourhotels" element={<OurHotels />} />
        <Route path="/Rooms" element={<Rooms />} />
        <Route path="/Contact" element={<ContactUsPage />} />
        <Route path="/Services" element={<ServicePage />} />
        <Route path="*" element={<Home />} />
      </Routes>
      <Footer />
    </BrowserRouter>
  );
}

ReactDOM.createRoot(document.getElementById('app')).render(<App />);
