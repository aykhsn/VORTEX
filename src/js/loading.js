let element = {};

/**********************
 Event
***********************/
window.addEventListener('DOMContentLoaded', () => {
	element.loading = document.getElementById('loading');
	element.body = document.querySelector('body');
});

window.onload = () => {
	// 読み込み完了後にローディング画面を閉じる
	closeLoadingScreen();
};

/**********************
 Function
***********************/
const closeLoadingScreen = () => {
	element.body.style.overflow = 'auto';
	element.body.classList.add('loaded');
	element.loading.classList.add('loaded');
}
