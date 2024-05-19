document.addEventListener('DOMContentLoaded', async () => {
    const url = 'https://api-football-v1.p.rapidapi.com/v3/timezone';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'b6948838a8mshd4f7f9c1c0c4250p129577jsn947faa7a35c0',
            'X-RapidAPI-Host': 'api-football-v1.p.rapidapi.com'
        }
    };

    try {
        const response = await fetch(url, options);
        
        // Yanıtın başarılı olup olmadığını kontrol edin
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        
        // Yanıtı JSON formatında al
        const result = await response.json();
        
        // Gelen yanıtı ve yapısını konsolda yazdır
        console.log('API Yanıtı:', result);
        
        displayData(result); // Veriyi ekranda göster
    } catch (error) {
        // Hata durumunda daha ayrıntılı bilgi konsolda yazdır
        console.error('API Çağrısı Hatası:', error);
        document.getElementById('api-data').textContent = 'No data available or an error occurred.';
    }
});

function displayData(data) {
    const dataDiv = document.getElementById('api-data');
    
    // Gelen veriyi kontrol edin ve ekranda gösterin
    if (data && Array.isArray(data.response)) {
        data.response.forEach(timezone => {
            const timezoneElement = document.createElement('p');
            timezoneElement.textContent = timezone;
            dataDiv.appendChild(timezoneElement);
        });
    } else {
        dataDiv.textContent = 'No data available or an error occurred.';
    }
}
