function bookHandler(btnNumber) {
    let pages = ['intro', 'page1', 'page2', 'page3'];

    for (let i = 0; i < pages.length; ++i) {
        document.getElementById(pages[i]).style.display = 'none';
        document.getElementById('to-' + pages[i] + '-btn').style.display = 'none';
    }

    document.getElementById(pages[btnNumber]).style.display = 'block';

    if (btnNumber - 1 >= 0) {
        document.getElementById('to-' + pages[btnNumber - 1] + '-btn').style.display = 'block';
    }
    if (btnNumber + 1 < pages.length) {
        document.getElementById('to-' + pages[btnNumber + 1] + '-btn').style.display = 'block';
    }
    else {
        document.getElementById('to-' + pages[0] + '-btn').style.display = 'block';
    }
}