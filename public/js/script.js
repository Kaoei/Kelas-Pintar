const chatContainer = document.querySelector('.chat-container');
let currentPosition = 0;

function slideLeft() {
    const chatboxWidth = chatContainer.offsetWidth;
    currentPosition -= chatboxWidth;
    chatContainer.style.transform = `translateX(${currentPosition}px)`;
}

function slideRight() {
    const chatboxWidth = chatContainer.offsetWidth;
    currentPosition += chatboxWidth;
    chatContainer.style.transform = `translateX(${currentPosition}px)`;
}

document.getElementById('prevBtn').addEventListener('click', slideRight);

document.getElementById('nextBtn').addEventListener('click', slideLeft);

//modal

document.addEventListener('DOMContentLoaded', function() {
    const modal = document.querySelector('.modal');            
    const openModalBtn = document.getElementById('open-modal');
    const overlay = document.getElementById('overlay');
    
    openModalBtn.addEventListener('click', function() {
        modal.classList.remove('hidden'); 
        overlay.classList.remove('opacity-0', 'pointer-events-none');
        overlay.classList.add('opacity-50', 'pointer-events-auto');
    });

    const closeModalBtn = document.getElementById('close-modal');

    closeModalBtn.addEventListener('click', function() {
        modal.classList.add('hidden'); 
        overlay.classList.remove('opacity-50', 'pointer-events-auto');
        overlay.classList.add('opacity-0', 'pointer-events-none');
    });

    const postHighlightBtn = document.getElementById('post-highlight');
    
    postHighlightBtn.addEventListener('click', function() {
        const highlightMessage = document.getElementById('highlight-message').value;
        modal.classList.add('hidden');
        overlay.classList.remove('opacity-50', 'pointer-events-auto');
        overlay.classList.add('opacity-0', 'pointer-events-none');
    });
});

