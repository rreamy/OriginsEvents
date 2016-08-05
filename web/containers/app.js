const apiBaseUrl = '/games/API'
const ApiHelper = {
	getConDays() {
		const retValue = $.ajax({
		  type: 'GET',
		  url: `${apiBaseUrl}/condays.json`,
//		  dataType: 'json'
		});
		return retValue;
	  }
};

class DayCheckBox extends React.Component {
	render() {
		return (
			<tr>
				<td>
					<input type="checkbox" name="daysCheckboxGroup" value={this.props.value} id={this.props.value} />
					<label htmlFor={this.props.value} className="checkbox_label">{this.props.name}</label>
				</td>
			</tr>
		);
	}
}

class SearchForm extends React.Component {
	
	constructor() {
    	super();
		this.state = {days: [ ]};
//				{id: 1, name: 'Wednesday', value: 'wednesday'},
//				{id: 2, name: 'Thursday', value: 'thrusday'},
//				{id: 3, name: 'Friday', value: 'friday'},
//				{id: 4, name: 'Saturday', value: 'saturday'},
//				{id: 5, name: 'Sunday', value: 'sunday'}
//			]};
	}

	componentWillMount() {
		ApiHelper.getConDays().then((response) => {
      		this.updateDays(response.days);
    	});
	}

	componentDidMount () {
  	}
	
	updateDays(dayList) {
		this.setState({days: dayList});
	}

	_getDays() {		
		return this.state.days.map( (day) => {
			return (
				<DayCheckBox name={day.name} value={day.value} key={day.id} />
			);
		} );
	}

	render() {
		
		const dayCheckboxes = this._getDays();

		return (
		<div className="content_container">
		<div className="search_form">
			<form>
			<label htmlFor="event_type">Event Type</label>
			<select className="event_type" name="event_type" id="event_type">
				<option value="ALL">All Game Types</option>
				<option value="BGM">Board Game</option>
				<option value="RPG">Role Playing Game</option>
				<option value="SEM">Seminar</option>
				<option value="CCG">Collectible Card Game</option>
				<option value="MINI">Miniatures</option>
			</select>
			  <table width="200">
				<thead>
				<tr>
					<th>Days</th>
				</tr>
				</thead>
				<tbody>
				{dayCheckboxes}
				</tbody>
			  </table>
			</form>
		</div>
		</div>
		);	
	}
}
class Header extends React.Component {
	render() {
		return (
			<div className="header_container">header
			</div>
		);
	}
}

class LeftNav extends React.Component {
	render() {
		return (
			<div className="leftnav_container">LeftNav
			</div>
		);
	}
}

class Layout extends React.Component {
	render() {
		return (
		<div>
			<Header />
			<LeftNav />
			<SearchForm />
		</div>
		);
	}
}

ReactDOM.render(
	<Layout />, document.getElementById('event-search-app')
);