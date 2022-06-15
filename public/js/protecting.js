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
		protectWorks: [],
	},
	methods: {
		getAllprotectWorks: function () {
			const data = {
				type: 'GET_PROTECT',
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
					this.protectWorks = data;
				});
		},
	},
	mounted() {
		this.getAllprotectWorks();
	},
});
