const main = new Vue({
	el: '#main',
	data: {
		key: '',
		services: [],
	},
	methods: {
		getAllServices: function () {
			const data = {
				type: 'GET_SERVICES',
			};

			const fd = new FormData();
			for (let i in data) {
				fd.append(i, data[i]);
			}

			fetch('http://detail52/php_vue.php', {
				method: 'POST',
				body: fd,
			})
				.then((response) => response.json())
				.then((data) => {
					this.services = data;
				});
		},
	},
	mounted() {
		getAllServices();
	},
});
