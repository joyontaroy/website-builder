-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2024 at 04:18 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `html` text NOT NULL,
  `thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `title`, `html`, `thumbnail`) VALUES
(1, 'subheading', '<div class=\"sub-header\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-lg-6 col-md-6\">\n                    <div class=\"sub-header-left\">\n                        <ul class=\"d-flex\">\n                            <li>\n                                <a href=\"#\"><svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n                                <path d=\"M18.3018 15.2734C18.3018 15.5734 18.2352 15.8817 18.0935 16.1817C17.9518 16.4817 17.7685 16.765 17.5268 17.0317C17.1185 17.4817 16.6685 17.8067 16.1602 18.015C15.6602 18.2234 15.1185 18.3317 14.5352 18.3317C13.6852 18.3317 12.7768 18.1317 11.8185 17.7234C10.8602 17.315 9.90182 16.765 8.95182 16.0734C7.99349 15.3734 7.08516 14.5984 6.21849 13.74C5.36016 12.8734 4.58516 11.965 3.89349 11.015C3.21016 10.065 2.66016 9.11504 2.26016 8.17337C1.86016 7.22337 1.66016 6.31504 1.66016 5.44837C1.66016 4.88171 1.76016 4.34004 1.96016 3.84004C2.16016 3.33171 2.47682 2.86504 2.91849 2.44837C3.45182 1.92337 4.03516 1.66504 4.65182 1.66504C4.88516 1.66504 5.11849 1.71504 5.32682 1.81504C5.54349 1.91504 5.73516 2.06504 5.88516 2.28171L7.81849 5.00671C7.96849 5.21504 8.07682 5.40671 8.15182 5.59004C8.22682 5.76504 8.26849 5.94004 8.26849 6.09837C8.26849 6.29837 8.21016 6.49837 8.09349 6.69004C7.98516 6.8817 7.82682 7.0817 7.62682 7.2817L6.99349 7.94004C6.90182 8.0317 6.86016 8.14004 6.86016 8.27337C6.86016 8.34004 6.86849 8.39837 6.88516 8.46504C6.91016 8.5317 6.93516 8.5817 6.95182 8.6317C7.10182 8.9067 7.36016 9.26504 7.72682 9.69837C8.10182 10.1317 8.50182 10.5734 8.93516 11.015C9.38516 11.4567 9.81849 11.865 10.2602 12.24C10.6935 12.6067 11.0518 12.8567 11.3352 13.0067C11.3768 13.0234 11.4268 13.0484 11.4852 13.0734C11.5518 13.0984 11.6185 13.1067 11.6935 13.1067C11.8352 13.1067 11.9435 13.0567 12.0352 12.965L12.6685 12.34C12.8768 12.1317 13.0768 11.9734 13.2685 11.8734C13.4602 11.7567 13.6518 11.6984 13.8602 11.6984C14.0185 11.6984 14.1852 11.7317 14.3685 11.8067C14.5518 11.8817 14.7435 11.99 14.9518 12.1317L17.7102 14.09C17.9268 14.24 18.0768 14.415 18.1685 14.6234C18.2518 14.8317 18.3018 15.04 18.3018 15.2734Z\" stroke=\"#192335\" stroke-width=\"1.25\" stroke-miterlimit=\"10\"/>\n                                </svg>\n                                +665 2325 3695</a>\n                            </li>\n                            <li>\n                                <a href=\"#\"><svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n                                    <path d=\"M9.99453 11.1912C11.4305 11.1912 12.5945 10.0272 12.5945 8.59121C12.5945 7.15527 11.4305 5.99121 9.99453 5.99121C8.55859 5.99121 7.39453 7.15527 7.39453 8.59121C7.39453 10.0272 8.55859 11.1912 9.99453 11.1912Z\" stroke=\"#192335\" stroke-width=\"1.25\"/>\n                                    <path d=\"M3.0187 7.0763C4.66037 -0.140363 15.352 -0.132029 16.9854 7.08464C17.9437 11.318 15.3104 14.9013 13.002 17.118C11.327 18.7346 8.67704 18.7346 6.9937 17.118C4.6937 14.9013 2.06037 11.3096 3.0187 7.0763Z\" stroke=\"#192335\" stroke-width=\"1.25\"/>\n                                    </svg>\n                                    Melbourne, Australia</a>\n                            </li>\n                        </ul>\n                    </div>\n                </div>\n                <div class=\"col-lg-6 col-md-6\">\n                    <div class=\"sub-header-left right-sub\">\n                        <ul class=\"d-flex\">\n                            <li><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></li>\n                            <li><a href=\"#\"><i class=\"fa-brands fa-whatsapp\"></i></a></li>\n                            <li><a href=\"#\"><i class=\"fa-brands fa-square-facebook\"></i></a></li>\n                            <li><a href=\"#\"><i class=\"fa-brands fa-square-behance\"></i></a></li>\n                        </ul>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>', ''),
(2, 'banner-wrapper', '<section class=\"banner-wraper\">\r\n        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-5 col-md-5\">\r\n                    <div class=\"banner-content\">\r\n                        <h5 class=\"d-flex\"><img src=\"assets/image/roket.svg\" alt=\"...\"> The Leader in online learning</h5>\r\n                        <h1>Start learning from the world’s pro <span class=\"gradient color shadow-none\">instructors</span></h1>\r\n                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>\r\n                        <div class=\"banner-btn\">\r\n                            <a href=\"#\" class=\"eBtn gradient\">Get Started</a>\r\n                            <a href=\"#\" class=\"eBtn learn-btn\"><i class=\"fa-solid fa-play\"></i>Learn More</a>\r\n                        </div>\r\n                        \r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-7 col-md-7\">\r\n                    <div class=\"banner-image\">\r\n                        <img class=\"large-img\" src=\"assets/image/banner.png\" alt=\"...\">\r\n                        <div class=\"over-text\">\r\n                            <span>\r\n                                <svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\r\n                                <g clip-path=\"url(#clip0_47_63)\">\r\n                                <mask id=\"mask0_47_63\" style=\"mask-type:luminance\" maskUnits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"30\" height=\"30\">\r\n                                <path d=\"M0 1.90735e-06H30V30H0V1.90735e-06Z\" fill=\"white\"/>\r\n                                </mask>\r\n                                <g mask=\"url(#mask0_47_63)\">\r\n                                <path d=\"M7.36816 27.2279V29.5615\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M22.6289 27.2279V29.5615\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                </g>\r\n                                <path d=\"M5.94995 4.26311V7.34473\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <mask id=\"mask1_47_63\" style=\"mask-type:luminance\" maskUnits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"30\" height=\"30\">\r\n                                <path d=\"M0 1.90735e-06H30V30H0V1.90735e-06Z\" fill=\"white\"/>\r\n                                </mask>\r\n                                <g mask=\"url(#mask1_47_63)\">\r\n                                <path d=\"M3.56714 27.2547V28.1348C3.56714 28.9227 4.20587 29.5615 4.9939 29.5615H25.0054C25.7933 29.5615 26.4321 28.9227 26.4321 28.1348V23.8904C26.4321 22.1012 25.2529 20.5261 23.5362 20.0221L21.7134 19.487L14.9996 23.4764L8.28622 19.4872L6.46331 20.0222C4.74646 20.5261 3.56714 22.1013 3.56714 23.8906V25.2003\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M21.7133 19.4871L17.6291 16.8194C17.6291 18.5262 17.1336 20.1963 16.2029 21.6269L14.9995 23.4766\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M8.28589 19.4871L12.3702 16.8194C12.3702 18.5262 12.8656 20.1963 13.7963 21.6269L14.9997 23.4766\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M11.2968 7.40565V8.73256C11.2968 9.26494 10.8652 9.6966 10.3328 9.6966H9.37549V11.273C9.37549 11.6758 9.70203 12.0024 10.1049 12.0024C10.232 12.0024 10.3354 12.1019 10.3434 12.2288C10.4972 14.6673 12.5224 16.5977 14.9996 16.5977C17.4769 16.5977 19.5021 14.6673 19.6559 12.2288C19.664 12.1019 19.7673 12.0024 19.8944 12.0024C20.2972 12.0024 20.6238 11.6758 20.6238 11.273V9.6966H19.6665C19.1341 9.6966 18.7025 9.26494 18.7025 8.73256V7.40565\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M12.3682 15.7837V16.8203L12.3701 16.8191\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M17.6292 16.8193V15.7851\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M17.7716 4.37924L16.0506 4.16631C15.352 4.07994 14.6455 4.07994 13.947 4.16637L10.0603 4.6473L9.01416 4.77674V6.975C9.01416 7.18898 9.1702 7.36611 9.37457 7.39998C9.39771 7.40379 9.42121 7.40625 9.44541 7.40625H20.5539C20.5775 7.40625 20.6004 7.40385 20.6229 7.40027C20.8282 7.36711 20.9853 7.18963 20.9853 6.975V4.77674L19.9371 4.64707L19.8139 4.63189\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M20.6228 9.69629V7.39936\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M9.37451 7.39906L9.37545 9.69629\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M20.984 4.77625L23.9943 4.26355C24.5087 4.17596 24.5588 3.45666 24.0616 3.29857L15.1495 0.463867C15.0513 0.432637 14.9459 0.432637 14.8477 0.463867L5.93555 3.29857C5.43838 3.45666 5.48854 4.17596 6.00288 4.26355L9.01401 4.77637\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M5.01803 9.03922L4.4243 12.5241C4.36823 12.8531 4.62165 13.1533 4.9554 13.1533H6.9446C7.27823 13.1533 7.53165 12.8531 7.47563 12.5241L6.88196 9.03922\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M6.88199 7.81557C6.88199 7.55559 6.67123 7.34482 6.41125 7.34482H5.48881C5.22883 7.34482 5.01807 7.55559 5.01807 7.81557V9.03906H6.88199V7.81557Z\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                <path d=\"M17.2406 19.4043C16.5501 19.5564 15.7935 19.6406 14.9996 19.6406C14.2056 19.6406 13.449 19.5564 12.7585 19.4043\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\r\n                                </g>\r\n                                </g>\r\n                                <defs>\r\n                                <clipPath id=\"clip0_47_63\">\r\n                                <rect width=\"30\" height=\"30\" fill=\"white\"/>\r\n                                </clipPath>\r\n                                </defs>\r\n                                </svg>\r\n                            </span>\r\n                            <div class=\"b-text\">\r\n                                <h5>250k +</h5>\r\n                                <p>Students has Enrolled</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>', ''),
(3, 'blog', '<section class=\"blog-wrapper section-padding\">\r\n        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-12\">\r\n                    <div class=\"res-control d-flex align-items-center justify-content-between\">\r\n                        <div class=\"section-title mb-0\">\r\n                            <span class=\"title-head mb-10\">Our Blog</span>\r\n                            <h2 class=\"title\">Have a look on our news</h2>\r\n                        </div>\r\n                        <a href=\"#\" class=\"eBtn gradient\">View All Blogs</a>\r\n                   </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"row justify-content-center mt-50\">\r\n                <div class=\"col-lg-4 col-md-6 col-sm-6 mb-20\">\r\n                    <div class=\"Ecard card b-card\">\r\n                        <div class=\"card-head\">\r\n                            <img src=\"assets/image/blog1.png\" alt=\"...\">\r\n                            <span>Bussiness</span>\r\n                        </div>\r\n                        <div class=\"card-body\">\r\n                            <h4>Skills That You Can Learn From Education</h4>\r\n                            <p class=\"description\">It is a long established fact that a reader will be distracted by the readable...</p>\r\n                            <div class=\"b_bottom d-flex justify-content-between\">\r\n                                <a href=\"#\" class=\"read-text mt-0 stretched-link\">Read More<i class=\"fa-solid fa-arrow-right-long ms-2\"></i></a>\r\n                               <span>01 Jan, 2024</span>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-4 col-md-6 col-sm-6 mb-20\">\r\n                    <div class=\"Ecard card b-card\">\r\n                        <div class=\"card-head\">\r\n                            <img src=\"assets/image/blog2.png\" alt=\"...\">\r\n                            <span>Bussiness</span>\r\n                        </div>\r\n                        <div class=\"card-body\">\r\n                            <h4>Skills That You Can Learn From Education</h4>\r\n                            <p class=\"description\">It is a long established fact that a reader will be distracted by the readable...</p>\r\n                            <div class=\"b_bottom d-flex justify-content-between\">\r\n                                <a href=\"#\" class=\"read-text mt-0 stretched-link\">Read More<i class=\"fa-solid fa-arrow-right-long ms-2\"></i></a>\r\n                               <span>01 Jan, 2024</span>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-4 col-md-6 col-sm-6 mb-20\">\r\n                    <div class=\"Ecard card b-card\">\r\n                        <div class=\"card-head\">\r\n                            <img src=\"assets/image/blog3.png\" alt=\"...\">\r\n                            <span>Bussiness</span>\r\n                        </div>\r\n                        <div class=\"card-body\">\r\n                            <h4>Skills That You Can Learn From Education</h4>\r\n                            <p class=\"description\">It is a long established fact that a reader will be distracted by the readable...</p>\r\n                            <div class=\"b_bottom d-flex justify-content-between\">\r\n                                <a href=\"#\" class=\"read-text mt-0 stretched-link\">Read More<i class=\"fa-solid fa-arrow-right-long ms-2\"></i></a>\r\n                               <span>01 Jan, 2024</span>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </section>', '');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `html` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `html`) VALUES
(1, 'home1', '<!-----------------  Sub Header Start ------------------->\n<div class=\"section parent\" id=\"152\">\n    <div class=\"sub-header\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-lg-6 col-md-6\">\n                    <div class=\"sub-header-left\">\n                        <ul class=\"d-flex\">\n                            <li>\n                                <a href=\"#\"><svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n                                <path d=\"M18.3018 15.2734C18.3018 15.5734 18.2352 15.8817 18.0935 16.1817C17.9518 16.4817 17.7685 16.765 17.5268 17.0317C17.1185 17.4817 16.6685 17.8067 16.1602 18.015C15.6602 18.2234 15.1185 18.3317 14.5352 18.3317C13.6852 18.3317 12.7768 18.1317 11.8185 17.7234C10.8602 17.315 9.90182 16.765 8.95182 16.0734C7.99349 15.3734 7.08516 14.5984 6.21849 13.74C5.36016 12.8734 4.58516 11.965 3.89349 11.015C3.21016 10.065 2.66016 9.11504 2.26016 8.17337C1.86016 7.22337 1.66016 6.31504 1.66016 5.44837C1.66016 4.88171 1.76016 4.34004 1.96016 3.84004C2.16016 3.33171 2.47682 2.86504 2.91849 2.44837C3.45182 1.92337 4.03516 1.66504 4.65182 1.66504C4.88516 1.66504 5.11849 1.71504 5.32682 1.81504C5.54349 1.91504 5.73516 2.06504 5.88516 2.28171L7.81849 5.00671C7.96849 5.21504 8.07682 5.40671 8.15182 5.59004C8.22682 5.76504 8.26849 5.94004 8.26849 6.09837C8.26849 6.29837 8.21016 6.49837 8.09349 6.69004C7.98516 6.8817 7.82682 7.0817 7.62682 7.2817L6.99349 7.94004C6.90182 8.0317 6.86016 8.14004 6.86016 8.27337C6.86016 8.34004 6.86849 8.39837 6.88516 8.46504C6.91016 8.5317 6.93516 8.5817 6.95182 8.6317C7.10182 8.9067 7.36016 9.26504 7.72682 9.69837C8.10182 10.1317 8.50182 10.5734 8.93516 11.015C9.38516 11.4567 9.81849 11.865 10.2602 12.24C10.6935 12.6067 11.0518 12.8567 11.3352 13.0067C11.3768 13.0234 11.4268 13.0484 11.4852 13.0734C11.5518 13.0984 11.6185 13.1067 11.6935 13.1067C11.8352 13.1067 11.9435 13.0567 12.0352 12.965L12.6685 12.34C12.8768 12.1317 13.0768 11.9734 13.2685 11.8734C13.4602 11.7567 13.6518 11.6984 13.8602 11.6984C14.0185 11.6984 14.1852 11.7317 14.3685 11.8067C14.5518 11.8817 14.7435 11.99 14.9518 12.1317L17.7102 14.09C17.9268 14.24 18.0768 14.415 18.1685 14.6234C18.2518 14.8317 18.3018 15.04 18.3018 15.2734Z\" stroke=\"#192335\" stroke-width=\"1.25\" stroke-miterlimit=\"10\"/>\n                                </svg>\n                                +665 2325 3695</a>\n                            </li>\n                            <li>\n                                <a href=\"#\"><svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n                                    <path d=\"M9.99453 11.1912C11.4305 11.1912 12.5945 10.0272 12.5945 8.59121C12.5945 7.15527 11.4305 5.99121 9.99453 5.99121C8.55859 5.99121 7.39453 7.15527 7.39453 8.59121C7.39453 10.0272 8.55859 11.1912 9.99453 11.1912Z\" stroke=\"#192335\" stroke-width=\"1.25\"/>\n                                    <path d=\"M3.0187 7.0763C4.66037 -0.140363 15.352 -0.132029 16.9854 7.08464C17.9437 11.318 15.3104 14.9013 13.002 17.118C11.327 18.7346 8.67704 18.7346 6.9937 17.118C4.6937 14.9013 2.06037 11.3096 3.0187 7.0763Z\" stroke=\"#192335\" stroke-width=\"1.25\"/>\n                                    </svg>\n                                    Melbourne, Australia</a>\n                            </li>\n                        </ul>\n                    </div>\n                </div>\n                <div class=\"col-lg-6 col-md-6\">\n                    <div class=\"sub-header-left right-sub\">\n                        <ul class=\"d-flex\">\n                            <li><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></li>\n                            <li><a href=\"#\"><i class=\"fa-brands fa-whatsapp\"></i></a></li>\n                            <li><a href=\"#\"><i class=\"fa-brands fa-square-facebook\"></i></a></li>\n                            <li><a href=\"#\"><i class=\"fa-brands fa-square-behance\"></i></a></li>\n                        </ul>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n        <!-----------------  Sub Header End  ------------------->\n <!-----------  Header Area Start  ------------->\n <div class=\"section parent\" id=\"153\"><header class=\"header-area\">\n    <div class=\"container\">\n        <div class=\"row align-items-center\">\n            <div class=\"col-lg-3 col-md-4 col-sm-4 col-6\">\n                <!-- logo Area -->\n                <div class=\"logo-image\">\n                    <a href=\"#\">\n                        <img src=\"../../assets/home/image/logo.png\" alt=\"...\">\n                    </a>\n                </div>\n            </div>\n            <div class=\"col-lg-9 col-md-8 col-sm-8 col-6\">\n                <div class=\"header-menu d-flex justify-content-end\">\n                   <div class=\"nav-menu\">\n                        <ul class=\"primary-menu main-menu-ul d-flex align-items-center\">\n                            <li><a href=\"#\" class=\"active\">Home</a></li>\n                            <li><a href=\"#\">About</a></li>\n                            <li class=\"have-mega-menu\"><a class=\"menu-parent-a\" href=\"#\">Courses</a>\n                             <ul class=\"mega-dropdown-menu mega main-mega-menu\">\n                                 <div class=\"row\">\n                                    <div class=\"col-lg-4\">\n                                        <div class=\"mega-menu-items\">\n                                            <h4>All Courses</h4>\n                                            <ul class=\"mega_list\">\n                                                <li><a href=\"\">Web Development</a></li>\n                                                <li><a href=\"\">Graphics Design</a></li>\n                                                <li><a href=\"\">Video Editing</a></li>\n                                                <li><a href=\"\">Graphics Design</a></li>\n                                                <li><a href=\"\">Content Writing</a></li>\n                                                <li><a href=\"\">Data Science</a></li>\n                                                <li><a href=\"\">Digital Marketing</a></li>\n                                            </ul>\n                                        </div>\n                                    </div>\n                                    <div class=\"col-lg-4\">\n                                        <div class=\"mega-menu-items\">\n                                            <h4>All Courses</h4>\n                                            <ul class=\"mega_list\">\n                                                <li><a href=\"\">Web Development</a></li>\n                                                <li><a href=\"\">Graphics Design</a></li>\n                                                <li><a href=\"\">Video Editing</a></li>\n                                                <li><a href=\"\">Graphics Design</a></li>\n                                                <li><a href=\"\">Content Writing</a></li>\n                                                <li><a href=\"\">Data Science</a></li>\n                                                <li><a href=\"\">Digital Marketing</a></li>\n                                            </ul>\n                                        </div>\n                                    </div>\n                                    <div class=\"col-lg-4\">\n                                        <div class=\"mega-menu-items\">\n                                            <img src=\"../../assets/home/image/mega.png\" alt=\"...\">\n                                        </div>\n                                    </div>\n                                 </div>\n                             </ul>\n                            </li>\n                            <li><a href=\"#\">Contact</a></li>\n                            <li class=\"Esearch\">\n                                <form action=\"\" method=\"post\" class=\"Esearch_entry\">\n                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">\n                                    <button type=\"submit\"><i class=\"fa-solid fa-magnifying-glass\"></i></button>\n                                </form>\n                            </li>\n                        </ul>\n                   </div>\n                    <div class=\"primary-end d-flex align-items-center\"> \n                        <select name=\"\" id=\"\" class=\"form-select nice-control\">\n                            <option value=\"en\">en</option>\n                            <option value=\"Bn\">Bn</option>\n                        </select>\n                        <a href=\"#\" class=\"eBtn btn gradient\">login</a>\n                        <span class=\"toggle-bar gradient\"  data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasWithBothOptions\" aria-controls=\"offcanvasWithBothOptions\"><i class=\"fa-sharp fa-solid fa-bars\"></i></span>\n                    </div>\n                </div>\n            </div>\n        </div>\n\n         <!-- Off Canves Menu -->\n         <div class=\"offcanvas offcanvas-start\" data-bs-scroll=\"true\" tabindex=\"-1\" id=\"offcanvasWithBothOptions\" aria-labelledby=\"offcanvasWithBothOptionsLabel\">\n            <div class=\"offcanvas-header\">\n              <h5 class=\"offcanvas-title\" id=\"offcanvasWithBothOptionsLabel\"></h5>\n              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>\n            </div>\n            <div class=\"offcanvas-body\">\n              <div class=\"off-menu\">\n                <div class=\"logo-image\">\n                    <a href=\"#\">\n                        <img src=\"../../assets/home/image/logo.png\" alt=\"...\">\n                    </a>\n                </div>\n                <div class=\"btn-off\">\n                    <a href=\"#\" class=\"eBtn btn gradient mb-3\">login</a>\n                    <a href=\"#\" class=\"eBtn btn gradient sign\">Sign Up</a>\n                </div>\n                  <ul class=\"primary-menu main-menu-ul\">\n                      <li><a href=\"#\" class=\"active\">Home</a></li>\n                      <li><a href=\"#\">About</a></li>\n                      <li><a href=\"#\" class=\"has-menu\">Courses <i class=\"fa-solid fa-angle-down\"></i></a>\n                       <ul class=\"droup-menu\">\n                           <div class=\"row\">\n                              <div class=\"col-sm-12\">\n                                  <div class=\"mega-menu-items\">\n                                      <h4>All Courses</h4>\n                                      <ul class=\"mega_list\">\n                                          <li><a href=\"\">Web Development</a></li>\n                                          <li><a href=\"\">Graphics Design</a></li>\n                                          <li><a href=\"\">Video Editing</a></li>\n                                          <li><a href=\"\">Graphics Design</a></li>\n                                          <li><a href=\"\">Content Writing</a></li>\n                                          <li><a href=\"\">Data Science</a></li>\n                                          <li><a href=\"\">Digital Marketing</a></li>\n                                      </ul>\n                                  </div>\n                              </div>\n                              <div class=\"col-sm-12\">\n                                  <div class=\"mega-menu-items\">\n                                      <h4>All Courses</h4>\n                                      <ul class=\"mega_list\">\n                                          <li><a href=\"\">Web Development</a></li>\n                                          <li><a href=\"\">Graphics Design</a></li>\n                                          <li><a href=\"\">Video Editing</a></li>\n                                          <li><a href=\"\">Graphics Design</a></li>\n                                          <li><a href=\"\">Content Writing</a></li>\n                                          <li><a href=\"\">Data Science</a></li>\n                                          <li><a href=\"\">Digital Marketing</a></li>\n                                      </ul>\n                                  </div>\n                              </div>\n                              <div class=\"col-sm-12\">\n                                  <div class=\"mega-menu-items\">\n                                      <img src=\"../../assets/home/image/mega.png\" alt=\"...\">\n                                  </div>\n                              </div>\n                           </div>\n                       </ul>\n                      </li>\n                      <li><a href=\"#\">Contact</a></li>\n                  </ul>\n              </div>\n            </div>\n          </div>\n\n    </div>\n</header></div>\n<!-----------  Header Area End   ------------->\n    <!-----------  Banner Area Start   ------------->\n    <div class=\"section parent\" id=\"154\"><section class=\"banner-wraper\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-lg-5 col-md-5\">\n                    <div class=\"banner-content\">\n                        <h5 class=\"d-flex\"><img src=\"../../assets/home/image/roket.svg\" alt=\"...\"> The Leader in online learning</h5>\n                        <h1 class=\"builder_text parent\" id=\"345\">Start learning from the world’s pro <span class=\"gradient color shadow-none\">instructors</span></h1>\n                        <p class=\"builder_text parent\" id=\"234\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>\n                        <div class=\"banner-btn\">\n                            <a href=\"#\" class=\"eBtn gradient\">Get Started</a>\n                            <a href=\"#\" class=\"eBtn learn-btn\"><i class=\"fa-solid fa-play\"></i>Learn More</a>\n                        </div>\n                        \n                    </div>\n                </div>\n                <div class=\"col-lg-7 col-md-7\">\n                    <div class=\"banner-image\">\n                        <img class=\"large-img\" src=\"../../assets/home/image/banner.png\" alt=\"...\">\n                        <div class=\"over-text\">\n                            <span>\n                                <svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n                                <g clip-path=\"url(#clip0_47_63)\">\n                                <mask id=\"mask0_47_63\" style=\"mask-type:luminance\" maskUnits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"30\" height=\"30\">\n                                <path d=\"M0 1.90735e-06H30V30H0V1.90735e-06Z\" fill=\"white\"/>\n                                </mask>\n                                <g mask=\"url(#mask0_47_63)\">\n                                <path d=\"M7.36816 27.2279V29.5615\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M22.6289 27.2279V29.5615\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                </g>\n                                <path d=\"M5.94995 4.26311V7.34473\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <mask id=\"mask1_47_63\" style=\"mask-type:luminance\" maskUnits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"30\" height=\"30\">\n                                <path d=\"M0 1.90735e-06H30V30H0V1.90735e-06Z\" fill=\"white\"/>\n                                </mask>\n                                <g mask=\"url(#mask1_47_63)\">\n                                <path d=\"M3.56714 27.2547V28.1348C3.56714 28.9227 4.20587 29.5615 4.9939 29.5615H25.0054C25.7933 29.5615 26.4321 28.9227 26.4321 28.1348V23.8904C26.4321 22.1012 25.2529 20.5261 23.5362 20.0221L21.7134 19.487L14.9996 23.4764L8.28622 19.4872L6.46331 20.0222C4.74646 20.5261 3.56714 22.1013 3.56714 23.8906V25.2003\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M21.7133 19.4871L17.6291 16.8194C17.6291 18.5262 17.1336 20.1963 16.2029 21.6269L14.9995 23.4766\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M8.28589 19.4871L12.3702 16.8194C12.3702 18.5262 12.8656 20.1963 13.7963 21.6269L14.9997 23.4766\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M11.2968 7.40565V8.73256C11.2968 9.26494 10.8652 9.6966 10.3328 9.6966H9.37549V11.273C9.37549 11.6758 9.70203 12.0024 10.1049 12.0024C10.232 12.0024 10.3354 12.1019 10.3434 12.2288C10.4972 14.6673 12.5224 16.5977 14.9996 16.5977C17.4769 16.5977 19.5021 14.6673 19.6559 12.2288C19.664 12.1019 19.7673 12.0024 19.8944 12.0024C20.2972 12.0024 20.6238 11.6758 20.6238 11.273V9.6966H19.6665C19.1341 9.6966 18.7025 9.26494 18.7025 8.73256V7.40565\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M12.3682 15.7837V16.8203L12.3701 16.8191\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M17.6292 16.8193V15.7851\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M17.7716 4.37924L16.0506 4.16631C15.352 4.07994 14.6455 4.07994 13.947 4.16637L10.0603 4.6473L9.01416 4.77674V6.975C9.01416 7.18898 9.1702 7.36611 9.37457 7.39998C9.39771 7.40379 9.42121 7.40625 9.44541 7.40625H20.5539C20.5775 7.40625 20.6004 7.40385 20.6229 7.40027C20.8282 7.36711 20.9853 7.18963 20.9853 6.975V4.77674L19.9371 4.64707L19.8139 4.63189\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M20.6228 9.69629V7.39936\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M9.37451 7.39906L9.37545 9.69629\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M20.984 4.77625L23.9943 4.26355C24.5087 4.17596 24.5588 3.45666 24.0616 3.29857L15.1495 0.463867C15.0513 0.432637 14.9459 0.432637 14.8477 0.463867L5.93555 3.29857C5.43838 3.45666 5.48854 4.17596 6.00288 4.26355L9.01401 4.77637\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M5.01803 9.03922L4.4243 12.5241C4.36823 12.8531 4.62165 13.1533 4.9554 13.1533H6.9446C7.27823 13.1533 7.53165 12.8531 7.47563 12.5241L6.88196 9.03922\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M6.88199 7.81557C6.88199 7.55559 6.67123 7.34482 6.41125 7.34482H5.48881C5.22883 7.34482 5.01807 7.55559 5.01807 7.81557V9.03906H6.88199V7.81557Z\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                <path d=\"M17.2406 19.4043C16.5501 19.5564 15.7935 19.6406 14.9996 19.6406C14.2056 19.6406 13.449 19.5564 12.7585 19.4043\" stroke=\"white\" stroke-width=\"0.878906\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>\n                                </g>\n                                </g>\n                                <defs>\n                                <clipPath id=\"clip0_47_63\">\n                                <rect width=\"30\" height=\"30\" fill=\"white\"/>\n                                </clipPath>\n                                </defs>\n                                </svg>\n                            </span>\n                            <div class=\"b-text\">\n                                <h5>250k +</h5>\n                                <p>Students has Enrolled</p>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </section></div>\n    <!-----------  Banner Area End   ------------->\n    <!-----------  Performance Area Start   ------------->\n    <div class=\"section parent\" id=\"155\"><section class=\"performance-wrapper section-padding\">\n        <div class=\"container\">\n            <div class=\"pr-wrap\">\n                <div class=\"row\">\n                    <div class=\"col-lg-3 col-md-6 col-sm-6  ps-border\">\n                        <div class=\"ps-single-wrap\">\n                            <img src=\"../../assets/home/image/p1.png\" alt=\"...\">\n                            <h4>Fast Performance</h4>\n                            <p class=\"description\">It is a long established fact that a reader will be distracted.</p>\n                        </div>\n                    </div>\n                    <div class=\"col-lg-3 col-md-6 col-sm-6 ps-border\">\n                        <div class=\"ps-single-wrap\">\n                            <img src=\"../../assets/home/image/p2.png\" alt=\"...\">\n                            <h4>Perfect Responsive</h4>\n                            <p class=\"description\">It is a long established fact that a reader will be distracted.</p>\n                        </div>\n                    </div>\n                    <div class=\"col-lg-3 col-md-6 col-sm-6 ps-border\">\n                        <div class=\"ps-single-wrap\">\n                            <img src=\"../../assets/home/image/p3.png\" alt=\"...\">\n                            <h4>Fast & Friendly Support</h4>\n                            <p class=\"description\">It is a long established fact that a reader will be distracted.</p>\n                        </div>\n                    </div>\n                    <div class=\"col-lg-3 col-md-6 col-sm-6 ps-border\">\n                        <div class=\"ps-single-wrap\">\n                            <img src=\"../../assets/home/image/p4.png\" alt=\"...\">\n                            <h4>Easy to Use</h4>\n                            <p class=\"description\">It is a long established fact that a reader will be distracted.</p>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </section></div>'),
(2, 'home2', '');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
