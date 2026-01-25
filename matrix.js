/* --- CLICK INTERACTION SYSTEM --- */

document.addEventListener('click', function(e) {
    
    // 1. Create the Pulse Element
    const pulse = document.createElement('div');
    pulse.className = 'cyber-pulse';

    // 2. Set Position to Mouse Coordinates
    // (Subtract 10px to center the 20px circle on the cursor)
    pulse.style.left = (e.pageX - 10) + 'px';
    pulse.style.top = (e.pageY - 10) + 'px';

    // 3. Add to the Document Body
    document.body.appendChild(pulse);

    // 4. Self-Destruct Sequence
    // Remove the element after 500ms (0.5 seconds) so the DOM doesn't get clogged
    setTimeout(() => {
        pulse.remove();
    }, 500);
});

// 1. Get the canvas element
const canvas = document.getElementById('matrix-rain');
const ctx = canvas.getContext('2d');

// 2. Set canvas to full screen
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// 3. The characters to drop (Katakana + Latin)
const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789@#$%^&*()*&^%KATAKANA';
const charArray = chars.split('');

// 4. Columns for the rain
const fontSize = 14;
const columns = canvas.width / fontSize;

// 5. An array to track the y-coordinate of each drop
const drops = [];
for (let i = 0; i < columns; i++) {
    drops[i] = 1;
}

// 6. The Draw Function (Runs repeatedly)
function draw() {
    // A. Paint the background black with slight transparency (creates the trail effect)
    ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    // B. Set text color and font
    ctx.fillStyle = '#0F0'; // Green text
    ctx.font = fontSize + 'px monospace';

    // C. Loop through drops
    for (let i = 0; i < drops.length; i++) {
        // Pick a random character
        const text = charArray[Math.floor(Math.random() * charArray.length)];
        
        // Draw the character
        ctx.fillText(text, i * fontSize, drops[i] * fontSize);

        // Reset drop to top randomly or move it down
        if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
            drops[i] = 0;
        }
        drops[i]++;
    }
}

// 7. Run the animation every 33 milliseconds
setInterval(draw, 33);

// 8. Handle window resizing
window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});