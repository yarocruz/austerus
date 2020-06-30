import "../css/style.css"
import React from 'react';
import ReactDOM from 'react-dom';

// Our modules / classes
import MobileMenu from "./modules/MobileMenu"
import HeroSlider from "./modules/HeroSlider"
import GoogleMap from "./modules/GoogleMap"
import Search from "./modules/Search";
import MyNotes from "./modules/MyNotes";
import Like from "./modules/Like";


// Instantiate a new object using our modules/classes
const mobileMenu = new MobileMenu()
const heroSlider = new HeroSlider()
const googleMap = new GoogleMap()
const search = new Search()
const myNotes = new MyNotes()
const like = new Like()

// React Code
function FirstComponent() {
  return (
      <div>
          <h1>Hello World</h1>
      </div>
  )
}

ReactDOM.render(<FirstComponent />, document.getElementById('app'));


// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}
