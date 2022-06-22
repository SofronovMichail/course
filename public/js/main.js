const main = new Vue({
	el: '#main',
	data: {
		menu: [
			{
				menuTitle: 'О НАС',
				menuHref: 'http://detail52/#about',
			},
			{
				menuTitle: 'УСЛУГИ',
				menuHref: 'http://detail52/#services',
			},
			{
				menuTitle: 'ЦЕНЫ',
				menuHref: 'http://detail52/#prices',
			},
			{
				menuTitle: 'КОНТАКТЫ',
				menuHref: 'http://detail52/#contacts',
			},
			{
				menuTitle: 'РЕГИСТРАЦИЯ',
				menuHref: 'http://detail52/#online',
			},
		],
		footerMenu: [
			{
				menuTitle: 'ТОНИРОВКА',
				menuHref: '/tinting',
			},
			{
				menuTitle: 'БРОНИРОВАНИЕ',
				menuHref: '/protecting',
			},
			{
				menuTitle: 'ХИМЧИСТКА',
				menuHref: '/cleaning',
			},
			{
				menuTitle: 'ПОЛИРОВКА',
				menuHref: '/polishing',
			},
			{
				menuTitle: 'ШУМОИЗОЛЯЦИЯ',
				menuHref: '/soundproofing',
			},
			{
				menuTitle: 'АВТОВИНИЛ',
				menuHref: '/vinyl',
			},
		],
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
		addNewService: function () {
			const data = {
				type: 'ADD_SERVICE',
				title: prompt('Введите наименование услуги'),
				img: prompt('Укажите местоположение изображения'),
				href: prompt('Укажите ссылку на страницу услуги'),
				description: prompt('Напишите описание услуги'),
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
					if (data == true) {
						alert('Услуга успешно добавлена!');
					} else {
						alert('Ошибка добавления!!!');
					}
				});
			this.getAllServices();
		},
		deleteService: function () {
			const data = {
				type: 'DELETE_SERVICE',
				id: prompt('Введите id услуги '),
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
					if (data == true) {
						alert('Услуга успешно удалена!');
					} else {
						alert('Ошибка удаления!!!');
					}
				});
			this.getAllServices();
		},
		saveChanges: function () {
			const data = {
				type: 'UPDATE_SERVICE',
				object: this.services,
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
					if (data == true) {
						alert('Услуга успешно удалена!');
					} else {
						alert('Ошибка удаления!!!');
					}
				});
			this.getAllServices();
		},
		goToTint: function () {
			window.location.href = '/admin/tinting';
		},
		goToProtect: function () {
			window.location.href = '/admin/protecting';
		},
		goToClean: function () {
			window.location.href = '/admin/cleaning';
		},
		goToPolish: function () {
			window.location.href = '/admin/polishing';
		},
		goToSound: function () {
			window.location.href = '/admin/soundproofing';
		},
		goToVinyl: function () {
			window.location.href = '/admin/vinyl';
		},
	},
	mounted() {
		this.getAllServices();
	},
});
