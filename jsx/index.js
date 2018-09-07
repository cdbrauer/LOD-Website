"use strict";

var database = firebase.database();

class ServicesTimes extends React.Component {
	constructor(props) {
		super(props);
		this.state = {serviceTimes: ""};
	}

	componentWillMount() {
		database.ref('/services/').once('value').then((snapshot) => {
			let data = snapshot.val();
			this.setState({serviceTimes: data.times});
		});
	}

	render() {
		return (
			<div className="nSection h2" style={{marginBottom: 0}}>
				{this.state.serviceTimes}
			</div>
		)
	}
}

class AdultsPage extends React.Component {
	constructor(props) {
		super(props);

		this.state = {adultEdItems: [], menItems: [], womenItems: []}
	}

	componentWillMount() {
		database.ref("/church/adult/").once('value').then((snapshot) => {
			let items = snapshot.val();
			for (const index in items) {
				let item = items[index];
				this.setState(prevState => ({
					adultEdItems: [...prevState.adultEdItems, item]
				}));
			}
		});

		database.ref("/church/men/").once('value').then((snapshot) => {
			let items = snapshot.val();
			for (const index in items) {
				let item = items[index];
				this.setState(prevState => ({
					menItems: [...prevState.menItems, item]
				}));
			}
		});

		database.ref("/church/women/").once('value').then((snapshot) => {
			let items = snapshot.val();
			for (const index in items) {
				let item = items[index];
				this.setState(prevState => ({
					womenItems: [...prevState.womenItems, item]
				}));
			}
		});
	}

	renderListItem = (item, id) => {
		let contactText = linkifyStr(item.contact);

		return (
			<div>
				<h4 className="leftAlign">{item.title}</h4>
				<p>{item.time}</p>
				<p>{item.room}</p>
				<p dangerouslySetInnerHTML={{__html: contactText}}></p>
				<div dangerouslySetInnerHTML={{__html: item.d}}/>
			</div>
		)
	}

	render() {
		return (
			<div>
				{this.state.adultEdItems.length > 0 ?
					(<div className="thirdSection">
						<h3>Adult Education</h3>
						<hr/>

						{this.state.adultEdItems.map(this.renderListItem)}
					</div>) : null
				}

				{this.state.menItems.length > 0 ?
					(<div className="thirdSection">
						<h3>Men’s Ministry</h3>
						<hr/>

						{this.state.menItems.map(this.renderListItem)}
					</div>) : null
				}

				{this.state.womenItems.length > 0 ?
					(<div className="thirdSection">
						<h3>Women’s Ministry</h3>
						<hr/>

						{this.state.womenItems.map(this.renderListItem)}
					</div>) : null
				}
			</div>
		)
	}
}

ReactDOM.render(<ServicesTimes/>, document.querySelector('#serviceTimesSection'));
ReactDOM.render(<AdultsPage/>, document.querySelector('#adultClassesSection'));
