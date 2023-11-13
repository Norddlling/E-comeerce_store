<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Apple iPhone 15 Pro', 
                'category' => 'Phones', 
                'quantity_of_product' => 9999,
                'price' => 1099, 
                'product_characteristics' => 
                    "Display:

                    Size: 6.5 inches (approx.)
                    Technology: ProMotion OLED display
                    Resolution: 2778 x 1284 pixels
                    Refresh Rate: 120Hz
                    Processor:
                    
                    Chipset: A17 Pro chip with Neural Engine
                    Performance: Enhanced speed and efficiency for seamless multitasking and high-performance gaming
                    Storage:
                    
                    Options: Available in various storage capacities (e.g., 128GB, 256GB, 512GB, and 1TB)
                    Camera:
                    
                    Rear Camera: Triple-camera system
                    Main Camera: Enhanced wide-angle camera
                    Ultra-Wide Camera: Improved ultra-wide-angle camera
                    Telephoto Camera: Upgraded telephoto camera
                    Front Camera: Advanced front-facing camera with Face ID and enhanced selfie capabilities
                    Video: Supports 8K video recording
                    Connectivity:
                    
                    5G: Fully optimized for high-speed 5G connectivity
                    Wi-Fi 6E: Enhanced Wi-Fi technology for faster wireless connectivity
                    Bluetooth: Latest Bluetooth version for seamless device connections
                    Security:
                    
                    Face ID: Advanced facial recognition for secure unlocking and authentication
                    Security Features: Enhanced encryption for data protection
                    Battery:
                    
                    Capacity: Improved battery life for extended usage
                    Charging: Supports fast charging and wireless charging capabilities
                    Operating System:
                    
                    iOS: Pre-installed with the latest iOS version (compatible with future updates)
                    Design:
                    
                    Materials: Premium build with durable materials
                    Colors: Available in various stylish color options
                    Additional Features:
                    
                    Environmental Initiatives: Continuing Apple's commitment to sustainability with the use of recycled materials
                    iOS Ecosystem Integration: Seamless integration with other Apple devices for a unified user experience"
                ,
                'description' => 
                    "Welcome to the next evolution in smartphone technology with the iPhone 15 Pro. This cutting-edge device redefines what's possible in the palm of your hand. Boasting a seamless fusion of innovation and style, this device is a testament to Apple's commitment to pushing boundaries.

                    Key Features:
                    
                    5G Mastery: Experience the full power of 5G with lightning-fast connectivity for seamless streaming, gaming, and browsing.
                    
                    A15 Bionic Chip: Unleash unparalleled performance and efficiency, handling even the most demanding tasks with ease.
                    
                    Pro Camera System: Capture life's moments in breathtaking detail with an enhanced camera system featuring AI-powered photography, 8K video recording, and revolutionary low-light capabilities.
                    
                    ProMotion Display: Dive into a stunning 120Hz ProMotion display, offering fluid visuals and responsiveness for an unparalleled viewing experience.
                    
                    Enhanced Security: Rely on state-of-the-art security features, including Face ID and advanced encryption, ensuring your data is protected.
                    
                    Revamped Design: The iPhone 15 Pro showcases a sleek, durable design, crafted with premium materials that exude elegance and durability.
                    
                    Extended Battery Life: Stay connected for longer with an improved battery life that adapts to your usage patterns.
                    
                    What's in the Box:
                    
                    iPhone 15 Pro
                    USB-C to Lightning Cable
                    Documentation
                    Why Choose iPhone 15 Pro?
                    
                    The iPhone 15 Pro stands as a testament to Apple's commitment to innovation and quality. It's not just a phone; it's a gateway to the future, offering unrivaled performance, connectivity, and a user experience that transcends expectations.
                    
                    Experience the future in your hands. Get the iPhone 15 Pro today and join the league of pioneers embracing the technological revolution."
                ,
                'product_image' => 'iphones-7479304_1280.jpg',
            ],

            [
                'product_name' => 'Apple iPad 10.9 2022', 
                'category' => 'Tablets', 
                'quantity_of_product' => 9993,
                'price' => 499, 
                'product_characteristics' => 
                    "Display:

                    Size: 10.9 inches (approx.)
                    Technology: Liquid Retina display
                    Resolution: 2360 x 1640 pixels
                    Processor:
                    
                    Chipset: A15 Bionic chip with Neural Engine (if released in 2022, considering technological advancements)
                    Storage:
                    
                    Options: Available in various storage capacities (e.g., 64GB, 128GB, 256GB)
                    Camera:
                    
                    Rear Camera: Single-camera system with improved sensor and image processing
                    Front Camera: Enhanced front-facing camera for video calls and selfies
                    Connectivity:
                    
                    Wi-Fi: Compatible with the latest Wi-Fi standards for faster wireless connections
                    Optional Cellular: Available in a cellular model for mobile data connectivity
                    Security:
                    
                    Touch ID/Face ID: Biometric security features for unlocking and authentication
                    Battery:
                    
                    Capacity: Optimized for extended battery life
                    Operating System:
                    
                    iOS: Pre-installed with the latest available iOS version for iPads (possibly iOS 16 or later, depending on the release time)
                    Design:
                    
                    Materials: Sleek and lightweight design, in line with Apple's design aesthetics
                    Colors: Available in various color options
                    Additional Features:
                    
                    Stylus Support: Compatible with Apple Pencil for creative and productivity use
                    Smart Keyboard Compatibility: Suitable for use with a compatible keyboard for enhanced productivity
                    Environmental Initiatives: Likely to include Apple's ongoing commitment to sustainability"
                ,
                'description' => 
                    "Description:

                    Step into the future of mobile computing with the Apple iPad 10.9, a masterpiece of innovation and elegance. Engineered to empower your creativity and productivity, this iPad embodies the pinnacle of Apple's commitment to excellence.
                    
                    Immersive Display:
                    The 10.9-inch Liquid Retina display brings your content to life with vibrant colors and remarkable clarity. Whether you're streaming your favorite shows, creating art, or working on presentations, the screen offers an immersive canvas for your ideas.
                    
                    Powerful Performance:
                    Fueled by the cutting-edge A15 Bionic chip with Neural Engine, the iPad 10.9 delivers exceptional performance, enabling seamless multitasking, gaming, and handling demanding tasks with remarkable ease.
                    
                    Capture Every Moment:
                    With an enhanced camera system, this iPad ensures that every memory is preserved in stunning detail. From family gatherings to creative projects, the improved camera and upgraded sensor elevate your photography and video calling experiences.
                    
                    Enhanced Connectivity:
                    Enjoy swift Wi-Fi connectivity or opt for the cellular model for on-the-go browsing and streaming. Stay connected and engaged wherever you are.
                    
                    Security and Convenience:
                    Unlock your iPad effortlessly with the integrated Touch ID or Face ID, providing top-tier security and seamless access to your device and personal data.
                    
                    Limitless Creativity:
                    The iPad 10.9 is fully compatible with the Apple Pencil, opening doors to a world of creativity and precision, whether you're an artist, student, or professional.
                    
                    Versatile and Stylish Design:
                    Designed to be sleek and lightweight, the iPad 10.9 boasts a timeless Apple aesthetic, offering a range of colors to suit your style and preferences.
                    
                    Extended Battery Life:
                    Experience extended battery life, ensuring you can work, create, and play for extended periods without interruptions.
                    
                    Smart Keyboard Compatibility:
                    Pair your iPad with a compatible keyboard for a seamless typing experience, transforming it into a productivity powerhouse.
                    
                    Environmental Responsibility:
                    Continuing Apple's dedication to sustainability, the iPad is crafted using environmentally friendly materials.
                    
                    The Apple iPad 10.9 (2022 Edition) is not just a tablet; it's a gateway to a world of endless possibilities. Dive into a realm of innovation, creativity, and productivity with this exceptional device."
                ,
                'product_image' => 'bar-621033_1280.jpg',
            ], 

            [
                'product_name' => 'Apple iPhone 11', 
                'category' => 'Phones', 
                'quantity_of_product' => 9991,
                'price' => 699, 
                'product_characteristics' => 
                    "Display:

                    Size: 6.1 inches
                    Type: Liquid Retina HD display
                    Resolution: 1792 x 828 pixels at 326 PPI
                    Display Technology: True Tone, Wide Color (P3), Haptic Touch
                    Processor:
                    
                    Chipset: A13 Bionic chip with third-generation Neural Engine
                    Storage:
                    
                    Options: Available in various storage capacities (64GB, 128GB, 256GB)
                    Camera:
                    
                    Dual Rear Cameras:
                    
                    12MP wide camera
                    12MP ultra-wide camera
                    Night mode, Portrait mode, Smart HDR, 4K video recording
                    Front Camera:
                    
                    12MP TrueDepth camera
                    Face ID for secure authentication and Animoji/Memoji
                    Connectivity:
                    
                    Network: Gigabit-class LTE, Wi-Fi 6, Bluetooth 5.0
                    Dual SIM (nano-SIM and eSIM) support
                    Security:
                    
                    Face ID: Advanced facial recognition for secure unlocking and authentication
                    Battery:
                    
                    Capacity: All-day battery life
                    Fast Charging: Supports fast charging (up to 50% charge in around 30 minutes) with a compatible adapter (sold separately)
                    Operating System:
                    
                    iOS: Shipped with iOS 13 (upgradable to the latest iOS version compatible with the device)
                    Design:
                    
                    Material: Aluminum and glass design
                    Colors: Available in various colors such as Black, Green, Yellow, Purple, (PRODUCT)RED, and White
                    Additional Features:
                    
                    Water and Dust Resistance: Rated IP68 (maximum depth of 2 meters up to 30 minutes)
                    Audio: Stereo speakers with spatial audio support"
                ,
                'description' => 
                    "Description:

                    Welcome to the brilliance of the iPhone 11. This remarkable device marries cutting-edge technology with a user-friendly design, delivering a seamless experience that's both powerful and intuitive.
                    
                    Immersive Display:
                    Feast your eyes on the 6.1-inch Liquid Retina display, offering stunning visuals and vibrant colors that bring your content to life. With True Tone and Wide Color (P3) technology, every moment on your screen is a visual masterpiece.
                    
                    A13 Bionic Chip:
                    Under the hood, the A13 Bionic chip reigns supreme, delivering unprecedented power and efficiency. This powerhouse ensures smooth multitasking, gaming, and handling even the most demanding applications with ease.
                    
                    Dual Camera System:
                    Capture the world in all its glory with the dual 12MP cameras, offering wide and ultra-wide lenses. The Night mode transforms low-light scenes into stunning images, while Portrait mode and Smart HDR deliver professional-looking photos. Shoot jaw-dropping 4K videos, unleashing your inner filmmaker.
                    
                    Front Camera Brilliance:
                    The 12MP TrueDepth camera not only provides you with Face ID for secure authentication but also allows you to dive into the world of Animoji and Memoji, bringing your expressions to life in exciting ways.
                    
                    Seamless Connectivity:
                    Stay connected with the latest network technologies, enjoying lightning-fast Gigabit-class LTE and the efficiency of Wi-Fi 6. Embrace the future with Bluetooth 5.0 and the convenience of dual SIM support (nano-SIM and eSIM).
                    
                    All-Day Battery Life:
                    Experience an all-day battery life that keeps up with your adventures. And when it's time to recharge, fast charging ensures you’re back in the game quickly with up to 50% charge in just around 30 minutes.
                    
                    Water and Dust Resistance:
                    Designed to withstand life's little mishaps, the iPhone 11 boasts an IP68 rating, making it water-resistant up to 2 meters for 30 minutes.
                    
                    Sleek Design and Colors:
                    With an aluminum and glass design, the iPhone 11 exudes elegance. Choose from a range of vibrant colors like Black, Green, Yellow, Purple, (PRODUCT)RED, and White to match your style.
                    
                    Audio and More:
                    Immerse yourself in sound with stereo speakers and experience spatial audio that enhances your audio-visual encounters.
                    
                    The iPhone 11 isn't just a phone; it's a statement of technological prowess and design finesse. It's your gateway to capturing moments, staying connected, and expressing yourself in ways you've only imagined. Experience innovation at your fingertips."
                ,
                'product_image' => 'iphone_11.jpg',
            ],

            [
                'product_name' => 'Samsung Galaxy S23', 
                'category' => 'Phones', 
                'quantity_of_product' => 9990,
                'price' => 999, 
                'product_characteristics' => 
                    "Display:

                    Size: Estimated around 6.5 to 6.7 inches
                    Type: Dynamic AMOLED display
                    Resolution: 1440 x 3200 pixels (Quad HD+)
                    Processor:
                    
                    Chipset: Possibly an advanced iteration of the Exynos or Qualcomm Snapdragon processor
                    Storage:
                    
                    Options: Likely available in various storage capacities (128GB, 256GB, 512GB) with expandable storage support
                    Camera:
                    
                    Rear Cameras: Expected to feature a multi-lens system, possibly including improved sensors for enhanced photography and video capabilities
                    Front Camera: Upgraded selfie camera for high-resolution photos and video calls
                    Connectivity:
                    
                    5G: Expected to be fully compatible with advanced 5G technology
                    Wi-Fi: Support for Wi-Fi 6E or an advanced version for faster wireless connectivity
                    Bluetooth: Latest Bluetooth version for seamless device connections
                    Security:
                    
                    Enhanced Security Features: Improved biometric authentication systems, possibly an upgraded version of facial recognition or fingerprint technology
                    Battery:
                    
                    Battery Capacity: Estimated to provide extended battery life with fast charging and possibly wireless charging capabilities
                    Operating System:
                    
                    OS: Shipped with the latest Android version and Samsung's One UI skin, optimized for the S23
                    Design:
                    
                    Materials: High-quality build materials with a sleek and elegant design
                    Colors: Available in various stylish color options
                    Additional Features:
                    
                    Improved Environmental Initiatives: Likely to incorporate more sustainable materials and energy-saving features
                    Integration with Smart Devices: Further integration with Samsung's ecosystem of smart devices and services"
                ,
                'description' => 
                    "Description:

                    Welcome to the future with the Samsung Galaxy S23, an embodiment of technological prowess and sophistication. Crafted to redefine the smartphone experience, this device promises a blend of power, style, and seamless connectivity.
                    
                    Immersive Display:
                    The Galaxy S23 boasts a stunning 6.5 to 6.7-inch Dynamic AMOLED display, delivering vivid, lifelike colors and sharp details. Enjoy your favorite content in high resolution with a Quad HD+ screen that offers an unparalleled visual experience.
                    
                    Next-Generation Processor:
                    Powered by a cutting-edge processor, the S23 is designed to handle the most demanding tasks with efficiency and speed. Whether you're gaming, multitasking, or streaming, expect a smooth and responsive performance.
                    
                    Advanced Camera System:
                    Unleash your creativity with an enhanced multi-lens rear camera system, capturing moments in extraordinary detail. Experience improved sensors, AI-powered photography, and cutting-edge video capabilities, ensuring your memories are preserved in stunning quality.
                    
                    Connectivity and Security:
                    Stay at the forefront of connectivity with full 5G support, enabling lightning-fast data speeds. Enhanced security features, such as an upgraded biometric authentication system, ensure your data and privacy are safeguarded.
                    
                    Extended Battery Life:
                    Experience a lasting battery life, keeping up with your day with ease. Fast charging capabilities ensure that you spend more time enjoying your device and less time plugged into a power source.
                    
                    Sleek Design and Innovative Colors:
                    Designed with premium materials, the Galaxy S23 embodies elegance and durability. Choose from a range of stylish and vibrant colors to match your unique style.
                    
                    Smart Ecosystem Integration:
                    Seamlessly integrate your Galaxy S23 with Samsung's ecosystem of smart devices, creating a unified and efficient experience across your tech.
                    
                    Environmental Commitment:
                    Continuing Samsung's commitment to sustainability, the S23 is likely to incorporate eco-friendly materials and energy-saving features.
                    
                    The Samsung Galaxy S23 isn't just a smartphone; it's a statement of innovation and style, offering a glimpse into the future of mobile technology. Elevate your mobile experience with a device designed to exceed expectations. Welcome to the next chapter of innovation."
                ,
                'product_image' => 'samsung-s23.jpg',
            ], 

            [
                'product_name' => 'Samsung Galaxy Tab S9', 
                'category' => 'Tablets', 
                'quantity_of_product' => 9995,
                'price' => 599, 
                'product_characteristics' => 
                    "Display:

                    Size: Estimated around 11 to 12.4 inches
                    Type: Super AMOLED or Super AMOLED Plus display
                    Resolution: 2560 x 1600 pixels or higher
                    Processor:
                    
                    Chipset: An advanced iteration of Samsung's Exynos or possibly a Qualcomm Snapdragon processor
                    Storage:
                    
                    Options: Expected to be available in various storage capacities (128GB, 256GB, 512GB) with expandable storage support via microSD card
                    Camera:
                    
                    Rear Cameras: Likely to feature high-resolution cameras, possibly a multi-lens system, to support quality photography and video recording
                    Front Camera: Upgraded front-facing camera for high-quality selfies and video calls
                    Connectivity:
                    
                    5G Support: Full compatibility with advanced 5G networks for faster data connectivity
                    Wi-Fi: Expected to support the latest Wi-Fi standards for improved wireless connectivity
                    Bluetooth: Equipped with the latest Bluetooth version for seamless device connections
                    Security:
                    
                    Enhanced Security Features: Improved biometric authentication systems, such as facial recognition or fingerprint technology
                    Battery:
                    
                    Battery Capacity: Expected to provide an extended battery life, possibly with fast charging and wireless charging capabilities
                    Operating System:
                    
                    OS: Likely to be shipped with the latest Android version customized with Samsung's One UI for tablets
                    Design:
                    
                    Materials: Premium build quality with a sleek and modern design
                    Colors: Available in various stylish color options
                    Additional Features:
                    
                    Improved S Pen Support: Enhanced stylus functionality for increased productivity and creativity
                    Multimedia Capabilities: Advanced sound and display technologies for an immersive media experience
                    Smart Connectivity: Integration with Samsung's ecosystem of smart devices for a connected and seamless user experience"
                ,
                'description' => 
                    "Description:

                    Introducing the Samsung Galaxy Tab S9, a testament to cutting-edge technology and sleek design. Engineered to elevate your tablet experience, this device promises a blend of power, elegance, and seamless connectivity.
                    
                    Immersive Display:
                    The Galaxy Tab S9 features a large, vibrant 11 to 12.4-inch Super AMOLED or Super AMOLED Plus display. With a high-resolution screen, every image, video, and document is showcased in stunning clarity and vivid colors.
                    
                    Next-Level Performance:
                    Powered by an advanced Exynos or Qualcomm Snapdragon processor, the Galaxy Tab S9 is designed to handle your multitasking needs effortlessly. Whether you're streaming, gaming, or working on intensive tasks, expect a responsive and smooth performance.
                    
                    Enhanced Camera System:
                    Capture life's moments in exceptional detail with high-resolution rear cameras, offering superior photography and video recording capabilities. From stunning landscapes to detailed close-ups, the Tab S9 ensures you never miss a shot.
                    
                    Connectivity and Security:
                    Stay connected and secure with complete 5G support and advanced security features like biometric authentication. Your data and privacy are safeguarded, offering peace of mind.
                    
                    Extended Battery Life:
                    With an extended battery life, the Tab S9 is your reliable companion throughout your day. Fast charging and wireless charging capabilities ensure you spend less time tethered to a power source.
                    
                    Stylish Design and Versatile Colors:
                    Designed with premium materials, the Galaxy Tab S9 exudes elegance and durability. Choose from a range of stylish colors to match your personal style.
                    
                    S Pen Integration and Multimedia Experience:
                    The Tab S9 offers enhanced S Pen support, allowing you to express your creativity and boost productivity. The tablet also features advanced sound and display technologies for an immersive multimedia experience.
                    
                    Smart Ecosystem Integration:
                    Seamlessly integrate your Galaxy Tab S9 with Samsung's ecosystem of smart devices, creating a unified and efficient experience across your tech.
                    
                    Environmental Commitment:
                    Continuing Samsung's commitment to sustainability, the Tab S9 incorporates eco-friendly materials and energy-saving features.
                    
                    The Samsung Galaxy Tab S9 is more than a tablet; it's a gateway to productivity, creativity, and a world of digital experiences. Elevate your tablet experience with a device designed to exceed expectations. Welcome to the next chapter of innovation."
                ,
                'product_image' => 'Samsung_galaxy_Tab_S9.jpg',
            ], 

            [
                'product_name' => 'Apple MacBook Air 13', 
                'category' => 'Laptops', 
                'quantity_of_product' => 9900,
                'price' => 1199, 
                'product_characteristics' => 
                    "Display:

                    Size: 13.3-inch Retina display
                    Resolution: 2560 x 1600 pixels
                    Processor:
                    
                    Chipset: Apple M1 chip with 8-core CPU, 7-core or 8-core GPU
                    Storage:
                    
                    Options: Available in various storage capacities (256GB, 512GB, 1TB, 2TB, or 4TB)
                    Memory (RAM):
                    
                    Options: Configurable to 8GB or 16GB unified memory
                    Battery:
                    
                    Battery Life: Up to 15 to 18 hours of web browsing or video playback
                    Camera:
                    
                    FaceTime HD Camera: 720p resolution for video calls
                    Security:
                    
                    Touch ID: Integrated fingerprint sensor for secure authentication
                    Connectivity:
                    
                    Ports: 2 Thunderbolt/USB 4 ports
                    Wireless: Wi-Fi 6, Bluetooth 5.0
                    Operating System:
                    
                    macOS: Shipped with the latest version of macOS, and compatible with future updates
                    Design:
                    
                    Materials: Aluminum chassis, sleek and lightweight design
                    Color: Available in various color options
                    Additional Features:
                    
                    Keyboard: Magic Keyboard with a scissor mechanism for a comfortable typing experience
                    Audio: Stereo speakers with wide stereo sound
                    Environmentally Friendly: Built with recycled aluminum and designed to meet ENERGY STAR requirements
                    The MacBook Air 13 with the Apple M1 chip is a powerful, lightweight laptop offering a high-resolution Retina display, impressive performance, and enhanced battery life, providing an efficient and enjoyable user experience."
                ,
                'description' => 
                    "Description:

                    Welcome to the epitome of seamless performance and sleek design—the MacBook Air 13. This extraordinary laptop redefines your computing experience, offering a perfect blend of power, portability, and style.
                    
                    Immersive Retina Display:
                    Feast your eyes on the vibrant 13.3-inch Retina display, showcasing razor-sharp images and vibrant colors with a resolution of 2560 x 1600 pixels. Every visual detail comes to life, offering a delightful viewing experience.
                    
                    Revolutionary Apple M1 Chip:
                    Powered by the groundbreaking Apple M1 chip with an 8-core CPU and a 7-core or 8-core GPU, the MacBook Air 13 delivers exceptional performance and efficiency. Whether you're editing videos, browsing the web, or working on creative projects, it handles it all with ease.
                    
                    Versatile Storage and Memory:
                    Available in various storage capacities ranging from 256GB to 4TB, with configurable memory options of 8GB or 16GB, the MacBook Air allows you to choose the perfect combination for your needs.
                    
                    Extended Battery Life:
                    Enjoy up to 15 to 18 hours of web browsing or video playback, ensuring that you can stay productive or entertained all day long without worrying about constant recharging.
                    
                    Crystal-Clear Video Calls:
                    Engage in high-quality video calls with the built-in FaceTime HD camera, offering a resolution of 720p for crystal-clear communication.
                    
                    Security and Convenience:
                    Integrated Touch ID ensures secure and convenient authentication, allowing you quick and easy access to your MacBook Air.
                    
                    Advanced Connectivity:
                    Featuring 2 Thunderbolt/USB 4 ports, Wi-Fi 6, and Bluetooth 5.0, the MacBook Air 13 provides versatile and fast connectivity options for all your devices and peripherals.
                    
                    Elegant Design and Environmental Commitment:
                    Crafted from aluminum, the MacBook Air is both sleek and environmentally friendly, designed with recycled materials while meeting ENERGY STAR requirements.
                    
                    Superior Keyboard and Audio:
                    Experience comfortable and precise typing with the Magic Keyboard and enjoy immersive sound with the stereo speakers providing wide stereo sound.
                    
                    The MacBook Air 13 is more than just a laptop; it's a companion that effortlessly blends power, elegance, and environmental responsibility. Elevate your computing experience and embark on a journey of seamless productivity and creativity with this exceptional device."
                ,
                'product_image' => 'MacBook_Air_13.jpg',
            ], 

            [
                'product_name' => 'HP Pavilion 15', 
                'category' => 'Laptops', 
                'quantity_of_product' => 9915,
                'price' => 799, 
                'product_characteristics' => 
                    "Processor:

                    CPU: Intel Core i5 or i7 or AMD Ryzen 5 or 7 (specific models may vary)
                    Display:
                    
                    Size: 15.6-inch diagonal display
                    Resolution: Full HD (1920 x 1080) or higher
                    Type: Depending on the model, it could be an IPS panel or a standard WLED-backlit display
                    Graphics:
                    
                    GPU: Intel UHD or Iris Xe Graphics / AMD Radeon Graphics (specific models may vary)
                    Memory (RAM):
                    
                    Options: Typically available in configurations ranging from 8GB to 16GB DDR4 RAM
                    Storage:
                    
                    Options: Varying storage capacities with SSD or HDD options (256GB, 512GB SSD, or 1TB HDD)
                    Operating System:
                    
                    OS: Windows 10 or Windows 11 (based on the release date and model version)
                    Connectivity:
                    
                    Wi-Fi: Wi-Fi 5 or Wi-Fi 6 (802.11ac or 802.11ax)
                    Bluetooth: Bluetooth 5.0 or higher
                    Ports:
                    
                    Typical Ports: USB Type-A, USB Type-C, HDMI, headphone/microphone combo jack, Ethernet, and an SD card reader
                    Battery:
                    
                    Capacity: Battery life can vary but usually offers several hours of usage.
                    Audio:
                    
                    Audio System: Typically includes B&O speakers for improved audio quality
                    Webcam:
                    
                    Camera: HD Webcam for video calls
                    Design:
                    
                    Material: Varies, often plastic or metal build with different color options
                    Dimensions and Weight:
                    
                    Dimensions: Varies based on the model
                    Weight: Typically ranges between 3.5 to 4.5 pounds
                    Keyboard and Touchpad:
                    
                    Keyboard: Full-size keyboard with a numeric keypad (depending on the model)
                    Touchpad: Multi-touch gesture support"
                ,
                'description' => 
                    "Description:

                    The HP Pavilion 15 is a powerhouse in a sleek, stylish design, offering impressive performance and features to meet your computing needs. Whether for work, study, or entertainment, this laptop is designed to keep up with your diverse demands.
                    
                    Robust Performance:
                    Equipped with powerful Intel Core i5 or i7 processors or AMD Ryzen 5 or 7 (specific to different models), the Pavilion 15 handles multitasking, productivity tasks, and even moderate gaming effortlessly. Coupled with 8GB to 16GB of memory, it delivers a smooth user experience.
                    
                    Vibrant Display Options:
                    Featuring a 15.6-inch diagonal display with Full HD resolution, visuals come to life on a bright and sharp screen. The display options might vary from IPS panels to standard WLED-backlit displays, offering immersive viewing experiences.
                    
                    Enhanced Graphics Capabilities:
                    With Intel UHD or Iris Xe Graphics or AMD Radeon Graphics (varies by model), the Pavilion 15 delivers decent graphics performance for casual gaming, content creation, and multimedia tasks.
                    
                    Ample Storage Options:
                    Select from various storage configurations, from snappy SSDs (256GB, 512GB) for faster performance to larger HDD options for expanded storage (1TB or more).
                    
                    Connectivity and Port Variety:
                    Equipped with Wi-Fi 5 or 6 and Bluetooth 5.0, the Pavilion 15 supports seamless connectivity. It offers an array of ports including USB Type-A and Type-C, HDMI, an SD card reader, and more for versatile connectivity.
                    
                    Elegant Design and Build:
                    The Pavilion 15 is available in various stylish color options, often featuring a sleek design crafted from durable materials, making it both aesthetically pleasing and sturdy.
                    
                    Integrated B&O Audio:
                    Enjoy an immersive audio experience with the B&O speakers, providing enhanced sound quality for your entertainment and content consumption.
                    
                    Portable and User-Friendly:
                    With a comfortable full-size keyboard, including some models featuring a numeric keypad, and a responsive touchpad, the Pavilion 15 offers an ergonomic user experience. It strikes a balance between performance and portability, making it a convenient companion for on-the-go tasks.
                    
                    The HP Pavilion 15 offers a harmonious blend of performance, style, and functionality, making it a reliable and versatile laptop for a range of users' needs."
                ,
                'product_image' => 'HP_Pavilion_15.jpg',
            ], 

            [
                'product_name' => 'Apple iMac 24', 
                'category' => 'Desktops', 
                'quantity_of_product' => 9951,
                'price' => 1699, 
                'product_characteristics' => 
                    "Processor:

                    Chip: Apple M1 chip with 8-core CPU and 7-core GPU
                    Memory (RAM):
                    
                    Options: Configurable to 8GB unified memory (upgradeable to 16GB at purchase)
                    Storage:
                    
                    Options: Typically available in configurations of 256GB or 512GB SSD
                    Display:
                    
                    Size: 24-inch 4.5K Retina display
                    Resolution: 4480 x 2520 pixels
                    Graphics:
                    
                    GPU: Integrated 7-core GPU in the base configuration
                    Connectivity:
                    
                    Ports: Two Thunderbolt/USB 4 ports, Two USB 3 ports, Gigabit Ethernet, 3.5 mm headphone jack, and SDXC card slot (specific ports may vary based on the model)
                    Camera and Audio:
                    
                    Camera: 1080p FaceTime HD camera
                    Audio: High-fidelity six-speaker system with force-cancelling woofers and support for spatial audio
                    Wireless Connectivity:
                    
                    Wi-Fi: Wi-Fi 6 (802.11ax)
                    Bluetooth: Bluetooth 5.0
                    Operating System:
                    
                    OS: macOS Big Sur (upgradable to the latest macOS version supported by the device)
                    Design:
                    
                    Colors: Available in various vibrant colors
                    Material: Sleek design with an aluminum enclosure"
                ,
                'description' => 
                    "Description:

                    Introducing the Apple iMac 24' M1, a testament to innovation, performance, and impeccable design. This all-in-one desktop computer is a powerhouse that redefines your computing experience with its cutting-edge technology and sleek aesthetics.
                    
                    Revolutionary M1 Chip:
                    At the heart of this iMac beats the Apple M1 chip, housing an 8-core CPU and a 7-core GPU in its base configuration. This remarkable fusion of performance and efficiency ensures seamless multitasking, swift responsiveness, and stunning visuals for all your tasks.
                    
                    Vibrant 4.5K Retina Display:
                    Immerse yourself in the brilliance of the 24-inch 4.5K Retina display, offering a stunning resolution of 4480 x 2520 pixels. Every image, video, or design project comes to life with vivid colors and incredible detail.
                    
                    Elegance in Design:
                    The iMac 24' M1 stands out not only for its performance but also for its sleek and modern design. Available in a range of vibrant colors, its slim profile and aluminum enclosure exude sophistication.
                    
                    Immersive Audio and Visuals:
                    Experience high-fidelity sound with the six-speaker system, which includes force-cancelling woofers, delivering impressive audio quality. The 1080p FaceTime HD camera ensures crystal-clear video calls and the support for spatial audio enhances your multimedia experience.
                    
                    Connectivity and Expandability:
                    Equipped with a variety of ports, including Thunderbolt/USB 4, USB 3, Gigabit Ethernet, and an SDXC card slot, the iMac ensures versatile connectivity for all your devices and peripherals.
                    
                    Effortless Wireless Connectivity:
                    Connect to Wi-Fi 6 and Bluetooth 5.0, providing lightning-fast wireless connections and seamless device pairing.
                    
                    Intuitive and Efficient:
                    With the power of macOS Big Sur, the iMac is both intuitive and powerful, making every task a joy to complete.
                    
                    The Apple iMac 24' M1 is more than a desktop; it's a statement of elegance and technological advancement, offering a superior computing experience for professionals, creatives, and enthusiasts. Redefine your workspace with this remarkable blend of power and design."
                ,
                'product_image' => 'Apple_iMac_24.jpg',
            ], 

            [
                'product_name' => 'Dell OptiPlex', 
                'category' => 'Desktops', 
                'quantity_of_product' => 9960,
                'price' => 899, 
                'product_characteristics' => 
                    "Processor:

                    Options: Intel Core i3, i5, i7, or higher depending on the model
                    Or: AMD Ryzen processors in some models
                    Memory (RAM):
                    
                    Options: Configurable memory from 4GB to 32GB (varies with different models)
                    Storage:
                    
                    Options: Available with various storage options, including HDD, SSD, or a combination (128GB to 1TB or more, depending on the model)
                    Graphics:
                    
                    Graphics Card: Integrated Intel UHD or dedicated graphics cards (varies based on model and configuration)
                    Operating System:
                    
                    OS: Typically ships with Windows 10 or Windows 11 Pro (specific to the model and purchase)
                    Connectivity:
                    
                    Ports: USB 3.1 ports, USB Type-C ports, DisplayPort, HDMI, VGA, Ethernet, and additional ports depending on the model
                    Wireless Connectivity:
                    
                    Wi-Fi: Some models feature Wi-Fi connectivity
                    Bluetooth: Bluetooth 5.0 or higher in certain configurations
                    Dimensions and Design:
                    
                    Size: Varies with the form factor, such as mini-tower, small form factor, or micro form factor
                    Design: Classic and professional desktop design with options for tool-less access
                    Security Features:
                    
                    Options: Security features such as TPM, optional cable lock, and BIOS security
                    Optical Drive:
                    
                    Options: Available in some models (DVD-RW or Blu-ray drive)
                    Monitor Support:
                    
                    Support: Varies, typically supporting dual or multiple monitors"
                ,
                'description' => 
                    "Description:

                    The Dell OptiPlex series represents a versatile lineup of desktop computers designed to meet the diverse demands of modern businesses. With varying configurations and form factors, the OptiPlex range offers reliability, performance, and scalability for different workspace environments.
                    
                    Powerful Performance:
                    Equipped with Intel Core i3, i5, i7, or higher processors, and in some models, AMD Ryzen processors, the OptiPlex series ensures robust computing power suitable for various tasks. Ranging from routine office work to more demanding applications, these desktops deliver the performance you need.
                    
                    Configurable Memory and Storage:
                    From 4GB to 32GB of memory and storage options including HDDs, SSDs, or a combination, OptiPlex allows flexibility in configurations, catering to the storage and performance requirements of different users.
                    
                    Graphics Capabilities:
                    Featuring integrated Intel UHD graphics or dedicated graphics cards in some models, the OptiPlex series ensures smooth visuals for general computing and specific graphics-intensive tasks.
                    
                    Professional Design and Connectivity:
                    Designed in various form factors—mini-tower, small form factor, or micro form factor—the OptiPlex desktops present a professional and efficient look. Equipped with a multitude of ports such as USB, DisplayPort, HDMI, and more, these systems ensure connectivity with diverse peripherals.
                    
                    Reliable Security Features:
                    With built-in security measures like TPM, optional cable locks, and BIOS security, the OptiPlex series maintains data integrity and confidentiality.
                    
                    Adaptable and Expandable:
                    The range accommodates different workspace requirements, allowing for tool-less access in some models and providing options for optical drives as well as support for dual or multiple monitors.
                    
                    The Dell OptiPlex series embodies versatility and performance, delivering a reliable desktop computing solution for various business environments. With options for customization and adaptability, it's designed to meet the dynamic needs of modern workplaces."
                ,
                'product_image' => 'Dell_OptiPlex.jpg',
            ], 

            [
                'product_name' => 'Apple AirPods Pro', 
                'category' => 'Headphones', 
                'quantity_of_product' => 9793,
                'price' => 299, 
                'product_characteristics' => 
                    "Design:

                    Form Factor: In-ear headphones with a customizable fit
                    Ear Tips: Three sizes of soft, silicone ear tips included for a comfortable, secure fit
                    Audio Technology:
                    
                    Active Noise Cancellation: Uses two microphones combined with advanced software to adapt to the ear and block external noise
                    Transparency Mode: Allows users to hear and connect with the environment around them
                    Adaptive EQ: Automatically tunes music to the shape of your ear for a rich, immersive listening experience
                    Audio Performance:
                    
                    Custom High-Excursion Drivers: Deliver powerful bass and crisp high frequencies
                    Custom High Dynamic Range Amplifier: Produces clear sound while extending battery life
                    Spatial Audio with Dynamic Head Tracking: Offers a theater-like experience for supported content
                    Chipset:
                    
                    H1 Chip: Powers real-time noise cancellation and audio processing
                    Controls:
                    
                    Force Sensors: Allow easy control of music, calls, and Siri access
                    Sweat and Water Resistance:
                    
                    IPX4 Rating: Provides resistance to sweat and water, making them suitable for workouts and active lifestyles
                    Battery Life:
                    
                    Listening Time on a Single Charge: Up to 4.5 hours with Active Noise Cancellation or Transparency Mode enabled
                    Listening Time with Active Noise Cancellation and Transparency Mode off: Up to 5 hours
                    Charging Case: Provides multiple additional charges for more than 24 hours of listening time
                    Charging:
                    
                    Wireless Charging Case: Supports Qi-certified chargers or Lightning connector
                    Connectivity:
                    
                    Bluetooth: Provides easy pairing and seamless connectivity with Apple devices
                    Compatibility:
                    
                    Devices: Works with iPhone, iPad, Apple Watch, and Mac models with the latest software versions"
                ,
                'description' => 
                    "Description:

                    Introducing the Apple AirPods Pro, a culmination of cutting-edge audio technology and personalized comfort, delivering an unparalleled listening experience. Designed to immerse you in your music while adapting seamlessly to your surroundings, these wireless earbuds redefine how you enjoy audio.
                    
                    Adaptive Noise Cancellation:
                    Equipped with active noise cancellation, the AirPods Pro employ advanced technology with dual microphones to continuously adapt to the geometry of your ear and the fit of the ear tips. Immerse yourself in your music while blocking out external noise for an undisturbed audio experience.
                    
                    Transparency Mode:
                    Stay connected to the world around you. With the tap of a button, switch to Transparency Mode, allowing ambient sounds to filter in, perfect for quick conversations or staying aware of your environment.
                    
                    Customized Comfort:
                    Experience comfort tailored to you. The AirPods Pro come with three sizes of soft, silicone ear tips, ensuring a secure, customizable fit that stays comfortably in place during all your activities.
                    
                    Adaptive EQ and High-Fidelity Audio:
                    Enjoy a rich, immersive sound experience. The AirPods Pro utilize adaptive EQ technology that automatically tunes music to the shape of your ear for a superior audio quality across a range of genres.
                    
                    Powerful Performance and Convenience:
                    Powered by the H1 chip, these earbuds offer seamless connectivity with Apple devices, quick access to Siri, and an easy setup process. The wireless charging case provides multiple charges, ensuring more than 24 hours of listening time on the go.
                    
                    Sweat and Water Resistance:
                    The IPX4 rating makes the AirPods Pro resistant to sweat and water, ideal for workouts and active lifestyles.
                    
                    Immersive Spatial Audio:
                    Experience a theater-like sensation with Spatial Audio and dynamic head tracking, elevating the listening experience for supported content.
                    
                    The Apple AirPods Pro redefine wireless audio, seamlessly combining advanced features, immersive sound, and personalized comfort in a sleek and compact design, making them an ideal choice for those seeking a premium and customizable listening experience."
                ,
                'product_image' => 'Apple_Airpods_Pro.jpg',
            ], 

            [
                'product_name' => 'Marshall Major IV', 
                'category' => 'Headphones', 
                'quantity_of_product' => 9803,
                'price' => 249, 
                'product_characteristics' => 
                    "Audio Drivers:

                    Custom-Tuned Drivers: 40mm dynamic drivers for a well-balanced sound profile
                    Battery Life:
                    
                    Listening Time: Up to 80 hours of wireless playtime on a single charge
                    Charging Method: USB-C charging; 15 minutes of charging gives approximately 15 hours of playtime
                    Wireless Connectivity:
                    
                    Bluetooth Version: Bluetooth 5.0 for seamless wireless connection
                    Multi-Point Connectivity: Ability to connect to two devices simultaneously
                    Controls and Features:
                    
                    Control Knob: Provides easy access to adjust volume, skip tracks, and manage calls
                    Phone Functionality: Built-in microphone for hands-free calls and voice assistance (like Siri or Google Assistant)
                    Comfort and Design:
                    
                    Ergonomic Design: Over-ear construction with cushioned ear cups for comfort during extended listening sessions
                    Collapsible Design: Foldable construction for easy storage and portability
                    Customizable Style: Iconic Marshall design with a range of classic color options
                    Durability and Build:
                    
                    Construction: Sturdy construction with a durable vinyl finish
                    Construction Materials: Built using high-quality materials for longevity and style
                    Additional Features:
                    
                    Custom EQ Control: Utilize the Marshall Bluetooth app to customize sound preferences
                    Sharing Audio: Ability to share music by using the 3.5mm socket for a wired connection
                    These specifications highlight the key features of the Marshall Major IV headphones, emphasizing their long battery life, wireless functionality, comfort, and classic Marshall design."
                ,
                'description' => 
                    "Description:

                    Introducing the Marshall Major IV, a harmonious blend of iconic Marshall design and superior sound technology. These wireless headphones combine an all-encompassing audio experience with enduring comfort and style, making them the perfect companion for the modern audiophile.
                    
                    Immersive Audio Performance:
                    Equipped with custom-tuned 40mm dynamic drivers, the Major IV delivers a well-balanced sound profile. Experience rich bass, clear mids, and crisp highs, providing an immersive listening experience across all genres.
                    
                    Unparalleled Battery Life:
                    With an exceptional battery life of up to 80 hours on a single charge, these headphones keep the music playing for extended periods. The convenience of USB-C charging ensures quick power-ups, providing 15 hours of playtime in just 15 minutes.
                    
                    Wireless Connectivity and Convenience:
                    Utilizing Bluetooth 5.0, the Major IV offers seamless wireless connectivity and multi-point connectivity, allowing you to switch between two devices without hassle. The control knob provides easy access to manage tracks, adjust volume, and handle calls.
                    
                    Comfort and Classic Design:
                    Designed for comfort during extended listening sessions, the Major IV features cushioned ear cups and an over-ear construction. Its collapsible design ensures easy storage and portability, while the durable vinyl finish embodies the classic Marshall style.
                    
                    Durability and Customization:
                    Constructed with high-quality materials, these headphones promise longevity without compromising on style. With a range of classic color options, the Major IV allows for a touch of personalization in your audio gear.
                    
                    Personalized Sound Control:
                    Leverage the Marshall Bluetooth app for custom EQ control, tailoring your sound preferences to suit your individual taste. Additionally, the 3.5mm socket enables sharing music with a wired connection.
                    
                    The Marshall Major IV headphones epitomize the perfect synergy between timeless design, enduring comfort, and exceptional sound quality, making them an ideal choice for those who value both style and substance in their audio accessories."
                ,
                'product_image' => 'Marshall_Major_IV.jpg',
            ], 

            [
                'product_name' => 'JBL Flip 5', 
                'category' => 'Speakers', 
                'quantity_of_product' => 9901,
                'price' => 149, 
                'product_characteristics' => 
                    "Audio:

                    Drivers: Racetrack-shaped driver delivering powerful sound
                    Frequency Response: 65Hz - 20kHz
                    Connectivity:
                    
                    Bluetooth Version: 4.2
                    Bluetooth Profiles: A2DP V1.3, AVRCP V1.6
                    Battery:
                    
                    Playtime: Up to 12 hours (varies with volume level and content)
                    Charging Time: 2.5 hours for a full charge
                    Battery Capacity: 4,800mAh
                    Waterproofing:
                    
                    IPX7 Rating: Waterproof design, allowing the speaker to be submerged in water
                    Speakerphone:
                    
                    Integrated Speakerphone: Allows for clear conference calls
                    Design:
                    
                    Dimensions (H x W x D): 7.1 x 18.1 x 6.9 inches
                    Weight: 1.19 lbs (540g)
                    Materials: Durable fabric and rugged rubber housing
                    Additional Features:
                    
                    JBL PartyBoost: Ability to pair two JBL PartyBoost-compatible speakers for stereo sound or link multiple speakers for a bigger party
                    Voice Assistant Integration: Compatible with Siri or Google Now for hands-free assistance
                    The JBL Flip 5 is a portable, waterproof Bluetooth speaker with a focus on durability, high-quality sound, and extended battery life, making it ideal for both indoor and outdoor use"
                ,
                'description' => 
                    "Description:

                    The JBL Flip 5 redefines portable sound, offering a compact design that packs a punch with its powerful audio performance and durable build. This waterproof Bluetooth speaker is your perfect companion for any adventure, whether indoors or outdoors.
                    
                    Immersive Sound Quality:
                    Equipped with a racetrack-shaped driver, the Flip 5 delivers impressive, powerful sound that covers a broad frequency range, ensuring a detailed and immersive audio experience.
                    
                    Seamless Connectivity:
                    Featuring Bluetooth 4.2, the Flip 5 connects effortlessly to your devices, supporting a wide range of profiles for easy pairing and stable wireless playback.
                    
                    Extended Battery Life:
                    With up to 12 hours of playtime on a full charge, the Flip 5 ensures your music keeps playing throughout the day. A quick 2.5-hour charge rejuvenates the 4,800mAh battery for extended usage.
                    
                    Rugged and Waterproof Design:
                    Built to withstand the elements, the Flip 5 boasts an IPX7 waterproof rating, making it resistant to water immersion. Its durable fabric and rugged rubber housing ensure resilience against outdoor elements.
                    
                    Versatile Speakerphone and Voice Assistant Integration:
                    An integrated speakerphone feature allows crystal-clear conference calls. Additionally, the speaker is compatible with voice assistants like Siri or Google Now, allowing hands-free control.
                    
                    PartyBoost Functionality:
                    The JBL Flip 5 supports JBL PartyBoost, enabling the pairing of multiple compatible speakers for stereo sound or linking several speakers for an amplified party experience.
                    
                    Portable and Stylish:
                    Compact in size, the Flip 5 is easy to carry on any adventure. The sleek design and variety of available colors make it a stylish addition to any environment.
                    
                    The JBL Flip 5 is more than a speaker; it's a reliable, powerful, and versatile companion for music lovers, adventure seekers, and anyone seeking premium sound in a portable package."
                ,
                'product_image' => 'JBL_Flip_5.jpg',
            ], 

            [
                'product_name' => 'Bose SoundLink Mini II', 
                'category' => 'Speakers', 
                'quantity_of_product' => 9971,
                'price' => 199, 
                'product_characteristics' => 
                    "Audio:

                    Sound Output: Clear and detailed sound
                    Loudness: Surprisingly powerful for its size
                    Battery:
                    
                    Battery Life: Up to 10 hours of continuous playtime on a single charge
                    Charging Time: Typically 3 hours for a full recharge
                    Wireless Connectivity:
                    
                    Bluetooth Version: Wireless Bluetooth technology for seamless connection with devices
                    Range: Approx. 30 feet (10 meters)
                    Design:
                    
                    Dimensions (H x W x D): 2 x 7.1 x 2.3 inches
                    Weight: 1.5 pounds (0.68 kg)
                    Materials: Aluminum housing for durability
                    Additional Features:
                    
                    Speakerphone: Integrated speakerphone for clear calls
                    Voice Prompts: Voice prompts for easy Bluetooth pairing
                    Multi-Device Connection: Ability to remember up to 8 devices and connect to 2 devices simultaneously
                    The Bose SoundLink Mini II delivers clear, detailed sound in a compact and portable design, making it an excellent choice for on-the-go music lovers seeking quality audio performance."
                ,
                'description' => 
                    "Description:

                    The Bose SoundLink Mini II is a testament to the extraordinary power packed within a small and portable speaker. With its sleek design and impressive sound quality, it stands as the perfect companion for music lovers on the move.
                    
                    Immersive Sound Experience:
                    Despite its compact size, the SoundLink Mini II delivers remarkably clear and detailed sound, offering a powerful audio experience that belies its small footprint.
                    
                    Portable and Long-Lasting:
                    With up to 10 hours of playtime on a single charge, this speaker ensures your music plays on for extended periods. A mere 3-hour charging time rejuvenates it for another session of uninterrupted enjoyment.
                    
                    Wireless Connectivity and Convenience:
                    Featuring wireless Bluetooth technology, the SoundLink Mini II effortlessly connects to your devices, allowing freedom of movement up to 30 feet away from the source.
                    
                    Elegant Design and Durability:
                    Crafted with an aluminum housing, this speaker not only exudes sophistication but also ensures durability, making it a reliable companion for your adventures.
                    
                    Hands-Free Calls and Multi-Device Pairing:
                    Equipped with an integrated speakerphone, the SoundLink Mini II enables clear and convenient hands-free calls. Its ability to remember up to 8 devices and connect to 2 devices simultaneously adds to its versatility.
                    
                    Voice Prompts for Easy Pairing:
                    With voice prompts, Bluetooth pairing becomes a hassle-free and streamlined process, ensuring a quick and easy connection to your devices.
                    
                    The Bose SoundLink Mini II exemplifies the perfect harmony between portability, impressive sound quality, and user-friendly design, making it an essential accessory for music enthusiasts seeking exceptional sound in a compact package."
                ,
                'product_image' => 'Bose_SoundLink_Mini_II.jpg',
            ], 
        ]);
    }
}
