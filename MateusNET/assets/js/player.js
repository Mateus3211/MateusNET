const audio = new Audio();
let currentTrack = 0;

const tracks = [
    { title: "Música 1", artist: "Artista 1", src: "http://localhost/MateusNET/audio1.mp3", cover: "https://placeimg.com/80/80/any" },
    { title: "Música 2", artist: "Artista 2", src: "http://localhost/MateusNET/audio2.mp3", cover: "https://placeimg.com/80/80/any" }
];

const playBtn = document.getElementById('play-btn');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');
const progressBar = document.getElementById('progress-bar');
const volumeBar = document.getElementById('volume-bar');
const title = document.getElementById('music-title');
const artist = document.getElementById('music-artist');
const cover = document.getElementById('music-cover');

function loadTrack(index) {
    const track = tracks[index];
    audio.src = track.src;
    title.textContent = track.title;
    artist.textContent = track.artist;
    cover.src = track.cover;
}

function playPause() {
    if (audio.paused) {
        audio.play();
        playBtn.textContent = "⏸";
    } else {
        audio.pause();
        playBtn.textContent = "▶";
    }
}

function nextTrack() {
    currentTrack = (currentTrack + 1) % tracks.length;
    loadTrack(currentTrack);
    audio.play();
}

function prevTrack() {
    currentTrack = (currentTrack - 1 + tracks.length) % tracks.length;
    loadTrack(currentTrack);
    audio.play();
}

function updateProgress() {
    progressBar.value = (audio.currentTime / audio.duration) * 100 || 0;
}

function setProgress(e) {
    const newTime = (e.target.value / 100) * audio.duration;
    audio.currentTime = newTime;
}

function setVolume(e) {
    audio.volume = e.target.value;
}

playBtn.addEventListener('click', playPause);
nextBtn.addEventListener('click', nextTrack);
prevBtn.addEventListener('click', prevTrack);
audio.addEventListener('timeupdate', updateProgress);
progressBar.addEventListener('input', setProgress);
volumeBar.addEventListener('input', setVolume);

loadTrack(currentTrack);
