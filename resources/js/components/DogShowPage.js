import React from 'react';
import ReactDOM from 'react-dom';
import data from './data.json';
import GoogleMapReact from 'google-map-react';

class DogShowPage extends React.Component {

  state = {
    dog: "",
    lat: "",
    lng: ""
  }

  handleApiLoaded = (map, maps) => {
    var geocoder = new google.maps.Geocoder();
    var address = this.state.dog.contact.address.postcode;
    let that = this;
    geocoder.geocode({ 'address': address }, function (results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        let lat = results[0].geometry.location.lat();
        let lng = results[0].geometry.location.lng();
        that.setState({ lat, lng });
      }
    });
  }

  componentDidMount() {
    let dog = data.filter(item => item.id == id)[0] || "";
    this.setState({ dog }, () => {
      this.handleApiLoaded();
    });
    window.addEventListener('load', () => {
      document.querySelector("#dog-bio").style.opacity = 1;
    })

  }

  render() {

    const AnyReactComponent = ({ text }) => {
      return (
        <div className="marker d-flex flex-column align-items-center">
          <span>{text}</span>
        </div>
      );
    }

    const renderGallery = () => {
      return this.state.dog.photos.map((item, i) => {
        return (
          <div className="mr-2" key={i}>
            <a data-fancybox="fancybox" href={item.large}><img src={item.large} className="dog_profile1 zoom" /></a>
          </div>
        )
      })
    }

    const renderComponent = () => {
      return (
        <section id="dog-bio" className="py-5" style={{ opacity: 0, transition: "0.5s ease-in" }}>
          <div className="container">
            <div className="dog-info">
              <div className="dog-info__left d-flex justify-content-center">
                <div>
                  <div>
                    <img src={`${this.state.dog.photos ? this.state.dog.photos[0].large : ""}`} className="dog_profile2" />
                  </div>
                  <div className="gallery mt-3">
                    {this.state.dog.photos.length > 1 ? renderGallery() : ""}
                  </div>
                </div>
              </div>
              <div className="dog-info__right">
                <h2 className="mb-4 heading-text__large">Hello, My Name is {this.state.dog.name}.</h2>
                <p><span className="categories">Gender:</span> {this.state.dog.gender}</p>
                <p><span className="categories">Size:</span> {this.state.dog.size}</p>
                <p><span className="categories">Age:</span> {this.state.dog.age}</p>
                <p><span className="categories">Breed:</span> {this.state.dog.data.breeds.primary}</p>
                <p><span className="categories">Description:</span> {this.state.dog.description}</p>
                <p><span className="categories">Contact:</span> {this.state.dog.contact.email} {this.state.dog.contact.phone ? `or ${this.state.dog.contact.phone}` : ""}</p>
              </div>
            </div>
          </div>
        </section>
      )
    }

    const renderMap = () => {
      return (
        <section id="dog-location" className="container my-5">
          <h1 className="heading-text__large pb-3">{this.state.dog.name}'s location:</h1>
          <div style={{
            border: "15px solid white",
            height: "600px"
          }}>
            <GoogleMapReact
              bootstrapURLKeys={{ key: "AIzaSyCOVdVZ3zaOCmKcbrD0MV7TyKJbFbIOpqk" }}
              defaultCenter={{
                lat: this.state.lat,
                lng: this.state.lng
              }}
              defaultZoom={13}
            >
              <AnyReactComponent
                lat={this.state.lat}
                lng={this.state.lng}
                text={this.state.dog.name}
              />
            </GoogleMapReact>
          </div>
        </section>
      )
    }

    return (
      <React.Fragment>
        {this.state.dog && renderComponent()}
        {this.state.lat && renderMap()}
      </React.Fragment >
    );
  }

}

export default DogShowPage;

if (document.getElementById('dog-show-page')) {
  ReactDOM.render(<DogShowPage />, document.getElementById('dog-show-page'));
}
