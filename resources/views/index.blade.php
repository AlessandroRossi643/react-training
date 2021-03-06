<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>React_1</title>
  </head>
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <body>
    <div class="container profile mt-4">
      <div class="row">
        <div class="col-lg-12"></div>
      </div>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8"></div>
      </div>
      <div class="row">
        <div class="col-lg-12 likeit"></div>
      </div>
    </div>


    <!-- First Script -->
    <script type="text/babel">
    var Presentazione = React.createClass({
    render: function() {
      return <div className="jumbotron mb-0">
                <h1 className="display-4">{this.props.user.fullName().toUpperCase()}</h1>
                <p className="lead">{this.props.user.description}</p>
                <hr className="my-4"></hr>
                <p>{this.props.user.addressUser()}</p>
                <a className="btn btn-primary btn-lg" href="#" role="button">Scopri</a>
              </div>
    }
    });
    var userInfo = {
    firstName : 'Alessandro',
    lastName  : 'Rossi',
    description : 'Aspirante Full-Stack Web Developer, con tanta strada davanti da fare e un\'incredibile voglia di mettersi in gioco in un settore in cui fin dai tempi della scuola superiore desidero lavorare.',
    street : 'Via La Vigna',
    civic_number : '7',
    city : 'Pieve Santo Stefano (AR)',

    fullName  : function() {
        return this.firstName + ' ' + this.lastName;
    },

    addressUser : function() {
      return this.street + ' ' + this.civic_number + ' , ' + this.city;
    }
    };
    ReactDOM.render(<Presentazione user={userInfo}/>, document.querySelector(".col-lg-12"));
    </script>


    <!-- Second Script -->
    <script type="text/babel">
      var FotoProfilo = React.createClass({
        render: function(){
          return <div className="card">
          <img src="https://scontent-mxp1-1.xx.fbcdn.net/v/t1.0-9/22549629_103404140423969_5425928989355930540_n.jpg?_nc_cat=108&_nc_oc=AQmGnVQcjCgFESmKL6X9St4iTEMDfNbJHDr_xCXHEBi8KVXSh_OuYYajHGEaQn3X5Fs&_nc_ht=scontent-mxp1-1.xx&oh=f7e1085a0892e36bd45ffefa836dce3b&oe=5DF18599" className="card-img-top"></img>
          <div className="card-body">
            <p className="card-text">Apprese le basi della programmazione all ITC Luca Pacioli di Sansepolcro, ho deciso di coltivare questo interesse, frequentando il corso semestrale di formazione organizzato da Boolean Careers, start up innovativa e di ottimo livello, che mi ha dato le competenze necessarie per iniziare il percorso che ho sempre voluto fare.</p>
          </div>
        </div>
        }
      });
      ReactDOM.render(<FotoProfilo/>,document.querySelector(".col-lg-4"));
    </script>

    <!-- Third Script -->
    <script type="text/babel">
      var EsperienzeLavorative = React.createClass({
        render : function(){
          return <div className="container_esperienze">
          <div className="media">
            <img src="https://scontent-mxp1-1.xx.fbcdn.net/v/t1.0-9/41198466_1837398186339724_7444703260696379392_n.png?_nc_cat=102&_nc_oc=AQm3Xss9kNNLsDcfwHdBJA_x7JwX-pJ4nMf1Vs8ehAgVsGGmYrWeRNK1wW5FM8B-97s&_nc_ht=scontent-mxp1-1.xx&oh=c17032a3b27be5ba4e910f0750f6ffdb&oe=5DF7998E" className="mr-3 img-thumbnail" alt="..."></img>
            <div className="media-body">
              <h5 className="mt-0">Boolean Careers</h5>
              <h6 className="blockquote-footer"> Milano,2019 </h6>
              <p> Corso intensivo di sei mesi, di oltre 700 ore con cui ho consolidato le basi della programmazione sia lato back-end che lato front-end. </p>
              <ul>
                <li> HTML 5 e CSS3 (SCSS), JAVASCRIPT, MySQL, PHP </li>
                <li> Numerose librerie Javascript, utili per più funzioni: JQuery/JQuery UI, Vue.js, Handlebars, Moment.js, Chart.js </li>
                <li> Framework CSS: Bootstrap 3/4 </li>
                <li> Framework PHP: Laravel, con implementazione di numerose librerie utili per precise applicazioni, tra cui Zizaco/Entrust / Laravel Excel / Laravel Localization / Carbon </li>
              </ul>
            </div>
          </div>

          <div className="media mt-3">
            <img src="https://scontent-mxp1-1.xx.fbcdn.net/v/t1.0-9/22489851_10154958210421299_4474504972352971576_n.jpg?_nc_cat=108&_nc_oc=AQk112UoKS1Ow_adtlmxsDNMVyokLStKLc_Mi8bM5nMgf7HIbZ6k71s341tKkHmi48E&_nc_ht=scontent-mxp1-1.xx&oh=a5f2a3c5a01bd9451ef7575f072912e3&oe=5DFD1031" className="mr-3 img-thumbnail" alt="..."></img>
            <div className="media-body">
              <h5 className="mt-0">Tratos HV</h5>
              <h6 className="blockquote-footer"> Pieve Santo Stefano (AR), 2017-attuale </h6>
              <p> Con lo scopo di finanziare il mio percorso formativo, ho cominciato a lavorare presso una multinazionale con sede principale collocata in provincia di Arezzo, specializzata nella produzione e la fornitura nel mercato di ogni genere e tipologia di cavi: dai cavi in fibra ottica, ai cavi per alta tensione, fino ai cavi per uso petrolchimico, e superconduttori. </p>
            </div>
          </div>
        </div>
        }
      });
      ReactDOM.render(<EsperienzeLavorative/>,document.querySelector(".col-lg-8"))
    </script>

    <!-- Fourth Script -->
    <script type="text/babel">
    var StrenghtsButton = React.createClass({
      getInitialState: function() {
			return { liked: false };
    },
      render: function() {
		    if (this.state.liked)
			    return <ul className="list-group list-group-horizontal-lg my-2">
            <li className="list-group-item list-group-item-primary">Motivation</li>
            <li className="list-group-item list-group-item-success">Problem Solving</li>
            <li className="list-group-item list-group-item-danger">Teamworking</li>
            <li className="list-group-item list-group-item-warning">Understanding</li>
          </ul>
    		else
    			return <a className="btn btn-primary text-white" role="button" onClick={this.doLike}>Scopri le mie qualità</a>
    	},
	    doLike: function() {
		    this.setState({ liked: true });
	    }
      });
      ReactDOM.render(<StrenghtsButton />, document.querySelector(".likeit"));
    </script>


    <script src="https://fb.me/react-with-addons-0.14.0.js"></script>
    <script src="https://fb.me/react-dom-0.14.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.24/browser.js"></script>
    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
