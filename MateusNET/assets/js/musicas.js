
// Updated code to include better interactivity for a music player with search and filter features
const audioPlayer = document.getElementById('audio-player');
const progressBar = document.getElementById('progress-bar');

function openPlayer(title, artist, file) {
    document.getElementById('player-title').textContent = title;
    document.getElementById('player-artist').textContent = artist;
    audioPlayer.src = file;
    audioPlayer.play();
}

function togglePlay() {
    if (audioPlayer.paused) {
        audioPlayer.play();
    } else {
        audioPlayer.pause();
    }
}

function openModal(title, artist, file) {
    document.getElementById('modal-title').textContent = title;
    document.getElementById('modal-artist').textContent = artist;
    document.getElementById('modal-audio').src = file;
    document.getElementById('modal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('modal').style.display = 'none';
}

// New: Function to filter music cards by search term
function searchMusic(query) {
    const musicCards = document.querySelectorAll('.music-card');
    musicCards.forEach(card => {
        const title = card.querySelector('.music-title').textContent.toLowerCase();
        const artist = card.querySelector('.music-artist').textContent.toLowerCase();
        card.style.display = (title.includes(query.toLowerCase()) || artist.includes(query.toLowerCase())) ? 'block' : 'none';
    });
}

// Event listener for real-time search input
document.getElementById('search-input').addEventListener('input', (e) => {
    searchMusic(e.target.value);
});
