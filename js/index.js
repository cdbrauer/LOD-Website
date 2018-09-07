"use strict";

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var database = firebase.database();

var ServicesTimes = function (_React$Component) {
	_inherits(ServicesTimes, _React$Component);

	function ServicesTimes(props) {
		_classCallCheck(this, ServicesTimes);

		var _this = _possibleConstructorReturn(this, (ServicesTimes.__proto__ || Object.getPrototypeOf(ServicesTimes)).call(this, props));

		_this.state = { serviceTimes: "" };
		return _this;
	}

	_createClass(ServicesTimes, [{
		key: "componentWillMount",
		value: function componentWillMount() {
			var _this2 = this;

			database.ref('/services/').once('value').then(function (snapshot) {
				var data = snapshot.val();
				_this2.setState({ serviceTimes: data.times });
			});
		}
	}, {
		key: "render",
		value: function render() {
			return React.createElement(
				"div",
				{ className: "nSection h2", style: { marginBottom: 0 } },
				this.state.serviceTimes
			);
		}
	}]);

	return ServicesTimes;
}(React.Component);

var AdultsPage = function (_React$Component2) {
	_inherits(AdultsPage, _React$Component2);

	function AdultsPage(props) {
		_classCallCheck(this, AdultsPage);

		var _this3 = _possibleConstructorReturn(this, (AdultsPage.__proto__ || Object.getPrototypeOf(AdultsPage)).call(this, props));

		_this3.renderListItem = function (item, id) {
			var contactText = linkifyStr(item.contact);

			return React.createElement(
				"div",
				null,
				React.createElement(
					"h4",
					{ className: "leftAlign" },
					item.title
				),
				React.createElement(
					"p",
					null,
					item.time
				),
				React.createElement(
					"p",
					null,
					item.room
				),
				React.createElement("p", { dangerouslySetInnerHTML: { __html: contactText } }),
				React.createElement("div", { dangerouslySetInnerHTML: { __html: item.d } })
			);
		};

		_this3.state = { adultEdItems: [], menItems: [], womenItems: [] };
		return _this3;
	}

	_createClass(AdultsPage, [{
		key: "componentWillMount",
		value: function componentWillMount() {
			var _this4 = this;

			database.ref("/church/adult/").once('value').then(function (snapshot) {
				var items = snapshot.val();

				var _loop = function _loop(index) {
					var item = items[index];
					_this4.setState(function (prevState) {
						return {
							adultEdItems: [].concat(_toConsumableArray(prevState.adultEdItems), [item])
						};
					});
				};

				for (var index in items) {
					_loop(index);
				}
			});

			database.ref("/church/men/").once('value').then(function (snapshot) {
				var items = snapshot.val();

				var _loop2 = function _loop2(index) {
					var item = items[index];
					_this4.setState(function (prevState) {
						return {
							menItems: [].concat(_toConsumableArray(prevState.menItems), [item])
						};
					});
				};

				for (var index in items) {
					_loop2(index);
				}
			});

			database.ref("/church/women/").once('value').then(function (snapshot) {
				var items = snapshot.val();

				var _loop3 = function _loop3(index) {
					var item = items[index];
					_this4.setState(function (prevState) {
						return {
							womenItems: [].concat(_toConsumableArray(prevState.womenItems), [item])
						};
					});
				};

				for (var index in items) {
					_loop3(index);
				}
			});
		}
	}, {
		key: "render",
		value: function render() {
			return React.createElement(
				"div",
				null,
				this.state.adultEdItems.length > 0 ? React.createElement(
					"div",
					{ className: "thirdSection" },
					React.createElement(
						"h3",
						null,
						"Adult Education"
					),
					React.createElement("hr", null),
					this.state.adultEdItems.map(this.renderListItem)
				) : null,
				this.state.menItems.length > 0 ? React.createElement(
					"div",
					{ className: "thirdSection" },
					React.createElement(
						"h3",
						null,
						"Men\u2019s Ministry"
					),
					React.createElement("hr", null),
					this.state.menItems.map(this.renderListItem)
				) : null,
				this.state.womenItems.length > 0 ? React.createElement(
					"div",
					{ className: "thirdSection" },
					React.createElement(
						"h3",
						null,
						"Women\u2019s Ministry"
					),
					React.createElement("hr", null),
					this.state.womenItems.map(this.renderListItem)
				) : null
			);
		}
	}]);

	return AdultsPage;
}(React.Component);

ReactDOM.render(React.createElement(ServicesTimes, null), document.querySelector('#serviceTimesSection'));
ReactDOM.render(React.createElement(AdultsPage, null), document.querySelector('#adultClassesSection'));