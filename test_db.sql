-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2025 at 03:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_technologies`
--

CREATE TABLE `about_technologies` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_technologies`
--

INSERT INTO `about_technologies` (`id`, `user_id`, `title`, `content`, `image`, `created_at`) VALUES
(1, 7, 'we', 'd', 'null', '2025-02-02 21:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES
(1, 7, 'About Us', 'We are a tech-driven company that designs innovative solutions for tomorrow\'s challenges, providing cutting-edge technologies to a wide range of industries.', '2025-02-02 20:31:00'),
(2, 9, 'Our Mission', 'Our mission is to revolutionize the world of technology by providing efficient, secure, and scalable solutions that help businesses grow, optimize their operations, and achieve their goals.', '2025-02-02 20:33:26'),
(3, 10, 'Our Vision', 'To become a global leader in technology, providing sustainable solutions for industries of all sizes, and empower businesses to achieve the impossible.', '2025-02-02 20:34:15'),
(4, 3, 'Our Vision', 'To become a global leader in technology, providing sustainable solutions for industries of all sizes, and empower businesses to achieve the impossible.', '2025-02-02 20:53:45'),
(5, 15, 'About Us', 'We are a tech-driven company that designs innovative solutions for tomorrow\'s challenges, providing cutting-edge technologies to a wide range of industries.', '2025-02-02 21:04:47'),
(6, 15, 'Our Missions', 'Our mission is to revolutionize the world of technology by providing efficient, secure, and scalable solutions that help businesses grow, optimize their operations, and achieve their goals.', '2025-02-02 21:05:19'),
(7, 16, 'vGaN Device and Results', 'In the CAVEAT, the source region is comprised of the two-dimensional electron gas (2DEG) formed, as in the HEMT, in the GaN channel near the AlGaN/GaN interface. A trench aperture links the 2DEG to the drain formed in the n-GaN region below the aperture. The Schottky gate located above the aperture modulates the device’s current flow.\r\n\r\n', '2025-02-11 23:17:02'),
(8, 16, 'Na-flux and Multi-point ', 'The authors in this study used a Na-flux-based method where a sapphire substrate is the starting point. Numerous dots of 5 µm thick c-plane GaN crystals are selectively grown on the sapphire, creating an MPS substrate, which is the seed. ', '2025-02-11 23:20:10');

-- --------------------------------------------------------

--
-- Table structure for table `article_post`
--

CREATE TABLE `article_post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_post`
--

INSERT INTO `article_post` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`, `image`) VALUES
(4, 3, 'Automotive in the slow lane', 'Counterpoint expects an inventory correction in automotive semiconductors to persist through the first half of 2025, delaying recovery. High inventory levels at global integrated device manufactures like Infineon and NXP are likely to result in reduced outsourcing to mature-node foundries, further pressuring utilization at mature nodes.\r\n\r\n“While it’s true that semiconductor content per vehicle is increasing, driven by the trends of electric vehicles and advanced driver assistance systems, the automotive semiconductor market is currently facing a correction,” Chang said. “The auto market has been weak for several quarters, and high interest rates have further dampened demand since the sector particularly sensitive to macroeconomic conditions.”\r\n\r\nBeyond 2025, the foundry industry is poised for sustained growth, with a projected compound annual growth rate slowing to 13-15% from 2025 to 2028, according to Counterpoint.\r\n\r\n', '2025-01-31 20:00:55', '2025-02-11 23:07:53', '../admin/uploads/images/post_679fefad7478a0.16880950.jpeg'),
(5, 3, 'Chip equipment', 'Chip foundries will remain the leaders in semiconductor equipment purchases, according to industry association SEMI. The foundry segment this year is projected to increase capacity by 10.9% annually, rising from 11.3 million wafers per month in 2024 to a record 12.6 million in 2025, according to SEMI.\r\n\r\nThe memory segment had more modest growth of 3.5% in 2024 that is likely to slow to 2.9% in 2025, according to SEMI. Strong generative AI demand is driving significant changes in memory markets. Demand for high-bandwidth memory (HBM) is surging, creating a divergence in capacity growth trends compared with DRAM and NAND flash segments.\r\n\r\nSK Hynix in January overtook memory industry leader Samsung in annual operating profit for the first time on strong sales of advanced memory chips, particularly HBM. SK Hynix is the sole HBM supplier to Nvidia. Memory rivals Samsung and Micron are still trying to launch HBM products.', '2025-01-31 20:02:08', '2025-02-11 23:08:34', '../admin/uploads/images/post_679fefb220a091.41099107.jpeg'),
(6, 3, 'Motor Control and Power Conversion', ' Technologies has launched a new family of microcontrollers (MCUs), designed to meet the growing demands of industries. With these MCUs, developers will benefit from a shared ecosystem that includes common software tools and AI/ML capabilities, enhancing predictive maintenance or anomaly detection applications. Designed to improve motor control, power conversion, and the integration of wide bandgap (WBG) semiconductors like silicon carbide (SiC) and gallium nitride (GaN), this new portfolio centers on the PSOC Control, the newest family of high-performance Arm® Cortex®-M33 based microcontrollers (MCUs). Entry and Main Line products included in PSOC Control C3 provide a scalable and compatible range of performance, functionality, and memory options.  Steve Tateosian, Senior Vice President for Consumer, Industrial & IoT MCUs at Infineon, underlined in an interview with Power Electronics News the large investment in reviving his IoT and industrial MCU portfolio. Part of this work, the new PSOC Control family is meant to improve motor control and power conversion uses.  “We’ve been making a pretty big investment in revitalizing our IoT and industrial MCU portfolio,” said Tateosian. “The C3 family is focused on motor control and power conversion, with an eye on future devices incorporating industrial communication protocols like EtherCAT.”', '2025-01-31 20:05:51', '2025-02-11 23:09:41', '../admin/uploads/images/post_679fefb9c26e26.13611406.jpeg'),
(7, 3, 'High-Speed Control Loops', 'A standout feature of the PSOC Control family is its ability to handle high-speed control loops, facilitated by high-speed ADCs (analog-to-digital converters) and high-resolution PWM (pulse-width modulation). By enabling efficient motor control and power conversion, these technologies help to control power consumption by means of better control of motor performance.\r\n\r\nInfineon claims that changes in power device technology—especially with the acceptance of wide bandgap (WBG) materials like GaN and SiC—play a major influence. “The introduction of wide bandgap power devices, such SiC and GaN, is transforming the landscape,” observed Tateosian. “We are primarily observing GaN and SiC applied in power supplies; systems require higher switching frequencies to achieve greater efficiency.”\r\n\r\nInfineon also underlined that although GaN technology has historically been slower to deploy, recent price cuts make it a more feasible choice even for motor control applications. “We’re seeing an economic switch-over point for motor control applications, where the benefits of GaN technology – including higher switching frequencies and improved efficiency – become more accessible.”', '2025-01-31 20:07:51', '2025-02-11 23:10:02', '../admin/uploads/images/post_679fefc0acfde6.18818600.jpeg'),
(8, 3, 'GaN in Motor Control', 'The reduction in GaN pricing is expected to impact motor control systems significantly. As GaN becomes more affordable, developers can increasingly replace traditional silicon devices with GaN, enabling more efficient and compact designs.\r\n\r\nTateosian noted, “The economic switch-over point is happening for motor control as well, where it becomes more viable to replace traditional silicon with GaN.” He also emphasized that as systems move toward higher power requirements—such as those in AI servers—the demand for higher switching frequencies in both motor control and power conversion systems becomes essential.\r\n\r\nWith GaN, developers are experiencing benefits such as smaller devices, reduced weight, and longer battery life, resulting from improved efficiency. As Tateosian explained, “Customers now have the option to choose based on whether they prioritize a smaller device, lighter weight for handheld applications, or longer battery life thanks to GaN’s higher efficiency.”', '2025-01-31 20:09:13', '2025-02-11 23:10:29', '../admin/uploads/images/post_679fefc70d9bb7.94065558.jpeg'),
(9, 3, 'GaN-Based OBC, WBG 300-mm Production, Vertical GaN Technology: Power Electronics Week Insights', 'The OPTIREG™ Power Management IC (PMIC) portfolio delivers highly efficient voltage regulation, featuring both pre- and post-regulator architectures with integrated DC/DC converters, linear regulators, and trackers. Beyond power supply capabilities, these ICs incorporate additional monitoring and control functions, allowing customers to develop automotive ECUs for safety-critical applications', '2025-01-31 20:09:45', '2025-02-11 23:11:21', '../admin/uploads/images/post_679fefcd1428a3.47633222.jpeg'),
(10, 3, 'Navitas’ GaN and SiC Technologies Drive Power for Dell’s™ AI Notebook Lineup', 'As the voltage range of the device is increased, the drift region across which the applied drain voltage in the off-state device is spread must increase. In a lateral device such as the HEMT, the device dimensions must increase accordingly. The lateral GaN HEMT has unique advantages over other technologies such as silicon and silicon carbide in the < 650 V operation range. The high carrier mobility and low parasitics of the device enable low-loss, high-frequency switching. However, as the voltage and power range are increased, the vertical geometry in Si and SiC devices allows for easier scaling.\r\n\r\nThe voltage rating is determined primarily by the vertical drift layer thickness. The current density can also be much higher for the vertical orientation. Heat sinking and packaging can be simpler as the entire backside of the die typically forms the drain contact. The e-mode lateral HEMT devices typically exhibit low threshold voltages (Vth) and other robustness challenges such as a lack of avalanche capability and ability to sustain short circuits in the µs range. These limitations can restrict the use of lateral GaN HEMTs from certain applications, which a vertical configuration can overcome.', '2025-01-31 20:12:30', '2025-02-11 23:11:45', '../admin/uploads/images/post_679fefd3412219.08899008.jpeg'),
(12, 3, 'Vertical GaN Device Advantages and Challenges', 'As the voltage range of the device is increased, the drift region across which the applied drain voltage in the off-state device is spread must increase. In a lateral device such as the HEMT, the device dimensions must increase accordingly. The lateral GaN HEMT has unique advantages over other technologies such as silicon and silicon carbide in the < 650 V operation range. The high carrier mobility and low parasitics of the device enable low-loss, high-frequency switching. However, as the voltage and power range are increased, the vertical geometry in Si and SiC devices allows for easier scaling.\r\n\r\nThe voltage rating is determined primarily by the vertical drift layer thickness. The current density can also be much higher for the vertical orientation. Heat sinking and packaging can be simpler as the entire backside of the die typically forms the drain contact. The e-mode lateral HEMT devices typically exhibit low threshold voltages (Vth) and other robustness challenges such as a lack of avalanche capability and ability to sustain short circuits in the µs range. These limitations can restrict the use of lateral GaN HEMTs from certain applications, which a vertical configuration can overcome.', '2025-01-31 20:24:08', '2025-02-11 23:12:02', '../admin/uploads/images/post_679d35e60a5991.98066027.jpg'),
(13, 3, 'Na-flux and Multi-point seed (MPS) based HVPE GaN substrate', 'The authors in this study used a Na-flux-based method where a sapphire substrate is the starting point. Numerous dots of 5 µm thick c-plane GaN crystals are selectively grown on the sapphire, creating an MPS substrate, which is the seed. Hexagonal pyramidal GaN crystals are grown using metal-organic vapor phase epitaxy (MOVPE) from the individual point seeds, which coalesce to obtain a single crystal. A flux-film coated (FFC) technique is used to promote lateral growth and coalesce the GaN crystals by pulling the substrate up from the melt and using the residual melt between the crystals. The moderate growth conditions (< 50 atm and 1000 °C) allow for simpler equipment to be used.\r\n\r\nThe GaN crystal separates from the sapphire upon cooling, and flat c-plane mirror-like crystals larger than 3 inches after back-grinding and chemical mechanical polishing have been produced. Multi-photon excitation photoluminescence (MPPL) was used to study the TDs. Optimized growth conditions reduced overall TDD level to the order of 103 to 104/cm2, with higher distributions in the void regions formed at the intersection of three of the GaN hexagonal crystals. Continued work is in progress to optimize these. The lattice curvature was measured by X-ray rocking curves (XRC) and showed a maximum off-axis variation of less than +/- 0.009°.\r\n\r\nThe growth rate of the Na-flux crystal was around 20 µm/hr. While this method can grow large GaN crystals with low TDD and curvature, it is too slow for thick growth. Hence the N-flux is used as the seed crystal for subsequent HVPE GaN growth. This seed layer is polished out for the final device. A comparison versus commercial HVPE-GaN substrates showed a smaller maximum off-axis variation with the Na-flux HVPE GaN substrate. This results in minimizing carrier density variations in the final device.', '2025-01-31 20:26:36', '2025-02-11 23:12:56', '../admin/uploads/images/post_679d31fc22e086.19304827.png'),
(14, 3, 'vGaN Device and Results', 'Many different approaches are being tried to create vGaN devices. These include Sandia National Labs trench gate vertical MOSFET, a JFET architecture from NexGen Power Systems, planar gate MOSFETs from Odyssey Semiconductor, FinFETs, etc. The Current Aperture Vertical Electron Transistor (CAVEAT) proposed by Yaacov in 2004 has been optimized by the authors in this study. The device cross-section is depicted in Figure 2.\r\n\r\nIn the CAVEAT, the source region is comprised of the two-dimensional electron gas (2DEG) formed, as in the HEMT, in the GaN channel near the AlGaN/GaN interface. A trench aperture links the 2DEG to the drain formed in the n-GaN region below the aperture. The Schottky gate located above the aperture modulates the device’s current flow.', '2025-01-31 20:27:01', '2025-02-11 23:13:19', '../admin/uploads/images/post_679fef98922be2.25743267.jpeg'),
(21, 3, 'Market Overview', 'Infineon’s PSOC Control family is designed to meet the growing demand in both motor control and power conversion applications. The motor control market is expected to reach €1.7 billion by 2024, with a 7% annual growth rate. The power conversion market is projected to grow to €8 billion, driven by the increasing demand for AI servers and telecom switch mode power supplies.\r\n\r\n“We’re seeing growth in both markets, especially as AI-driven cloud infrastructure and power conversion technologies evolve,” he noted. “The push for AI server infrastructures is really fueling this growth, specifically in the area of wide bandgap-based power supply designs.”', '2025-02-01 00:21:23', '2025-02-11 23:10:49', '../admin/uploads/images/post_679fefdceb9ef2.85196886.jpeg'),
(23, 3, 'Infineon Launches New PSOC Control Family for Motor Control and Power Conversion', 'Infineon Technologies has launched a new family of microcontrollers (MCUs), designed to meet the growing demands of industries. With these MCUs, developers will benefit from a shared ecosystem that includes common software tools and AI/ML capabilities, enhancing predictive maintenance or anomaly detection applications. Designed to improve motor control, power conversion, and the integration of wide bandgap (WBG) semiconductors like silicon carbide (SiC) and gallium nitride (GaN), this new portfolio centers on the PSOC Control, the newest family of high-performance Arm® Cortex®-M33 based microcontrollers (MCUs). Entry and Main Line products included in PSOC Control C3 provide a scalable and compatible range of performance, functionality, and memory options.\r\n\r\nSteve Tateosian, Senior Vice President for Consumer, Industrial & IoT MCUs at Infineon, underlined in an interview with Power Electronics News the large investment in reviving his IoT and industrial MCU portfolio. Part of this work, the new PSOC Control family is meant to improve motor control and power conversion uses.\r\n\r\n“We’ve been making a pretty big investment in revitalizing our IoT and industrial MCU portfolio,” said Tateosian. “The C3 family is focused on motor control and power conversion, with an eye on future devices incorporating industrial communication protocols like EtherCAT.”', '2025-02-02 20:53:24', '2025-02-11 23:09:16', '../admin/uploads/images/post_679fef88974cc0.55092126.jpeg'),
(24, 15, 'Chip equipment', 'Chip foundries will remain the leaders in semiconductor equipment purchases, according to industry association SEMI. The foundry segment this year is projected to increase capacity by 10.9% annually, rising from 11.3 million wafers per month in 2024 to a record 12.6 million in 2025, according to SEMI.\r\n\r\nThe memory segment had more modest growth of 3.5% in 2024 that is likely to slow to 2.9% in 2025, according to SEMI. Strong generative AI demand is driving significant changes in memory markets. Demand for high-bandwidth memory (HBM) is surging, creating a divergence in capacity growth trends compared with DRAM and NAND flash segments.\r\n\r\nSK Hynix in January overtook memory industry leader Samsung in annual operating profit for the first time on strong sales of advanced memory chips, particularly HBM. SK Hynix is the sole HBM supplier to Nvidia. Memory rivals Samsung and Micron are still trying to launch HBM products.', '2025-02-02 21:05:09', '2025-02-11 23:15:33', '../admin/uploads/images/post_67abda15cb1ef8.72611331.png'),
(25, 16, 'vGaN Device and Results', 'Many different approaches are being tried to create vGaN devices. These include Sandia National Labs trench gate vertical MOSFET, a JFET architecture from NexGen Power Systems, planar gate MOSFETs from Odyssey Semiconductor, FinFETs, etc. The Current Aperture Vertical Electron Transistor (CAVEAT) proposed by Yaacov in 2004 has been optimized by the authors in this study. The device cross-section is depicted in Figure 2.\r\n\r\nIn the CAVEAT, the source region is comprised of the two-dimensional electron gas (2DEG) formed, as in the HEMT, in the GaN channel near the AlGaN/GaN interface. A trench aperture links the 2DEG to the drain formed in the n-GaN region below the aperture. The Schottky gate located above the aperture modulates the device’s current flow.\r\n\r\n', '2025-02-11 23:17:14', '2025-02-11 23:18:32', '../admin/uploads/images/post_67abda7abaa4f7.49545316.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `mobile`, `message`, `submitted_at`) VALUES
(1, 'rere', 'rere', 'rer@ew.ew', '123123123123123', 'tst', '2025-01-14 23:22:42'),
(2, 'test', 'test', 'test@e.e', '321313132123', 'test', '2025-01-14 23:25:42'),
(3, 'opa', 'opa', 'opa@opa.com', '13213123123', 'opa', '2025-01-14 23:27:06'),
(4, 'opa', 'opa', 'opa@opa.com', '13213123123', 'opa', '2025-01-14 23:28:05'),
(5, 'test', 'test', 'test@ew.ewe', '123132312132', 'test', '2025-01-14 23:40:22'),
(6, 'test', 'test', 'test@ew.ewe', '123132312132', 'test', '2025-01-14 23:40:25'),
(7, 'vomoa', 'vompa', 'vomap@ew.ew', '231321312312', 'op', '2025-01-14 23:42:32'),
(8, 'vomoa', 'vompa', 'vomap@ew.ew', '231321312312', 'op', '2025-01-14 23:42:48'),
(9, 'opa', 'qewqe', 'ewopwe@ew.ew', '1233121231321', '321312', '2025-01-14 23:43:08'),
(10, 'gogo', 'gogo', 'gaxhet@gog.com', '32131231', 'gogoaxhet', '2025-01-14 23:43:25'),
(11, 'jjfds', 'dsfds', 'zbleona9@gmail.com', 'dfsdsf', 'dfsdfs', '2025-01-15 23:05:46'),
(12, 'ef', 'dc', 'zbleona9@gmail.com', '6474784', 's', '2025-01-16 11:20:28'),
(13, 'bleona', 'zeqiri', 'zbleona9@gmail.com', '044380249', 'fdkdvfkl', '2025-02-11 23:36:42'),
(14, 'ss', 'sdc', 'zbleona@gm.com', '9882', 'sc', '2025-02-11 23:38:34'),
(15, 'ss', 'sdc', 'zbleona@gm.com', '9882', 'sc', '2025-02-11 23:40:39'),
(16, 's', 's', 'blen@gmail.com', '22', 'cs', '2025-02-11 23:41:08'),
(17, 'd', 'd', 'zbleona9@gmail.com', '34', 'xz', '2025-02-11 23:51:14'),
(18, 'ss', 'sdc', 'zbleona9@gmail.com', '6474784', 'd', '2025-02-12 08:45:07'),
(19, 'jdbjhd', 'dbnd', 'zbleona9@gmail.com', '044380249', 'bleona zeqiri', '2025-02-12 09:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `image`, `title`, `content`, `created_at`) VALUES
(1, 7, '../admin/uploads/images/post_679ff0250732b3.05102819.jpeg', 'Revolutionizing Computing with an Energy Efficient ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2025-02-01 00:17:52'),
(2, 3, '../admin/uploads/images/post_679ff02b303076.32425094.jpeg', 'BrainChip’s IP for Targeting AI Applications at the Edge', 'Tony Lewis, CTO for BrainChip, and four other key scientists talk to Sunny Bains of the University College London. They discuss their business strategy, their temporal event-based neural network (TENN), and the next iteration of the Akida chip. Discussion follows with Giulia D’Angelo from the Czech Technical University in Prague and Ralph Etienne-Cummings of Johns Hopkins University.', '2025-02-01 00:22:57'),
(3, 3, '../admin/uploads/images/post_679ff0319ade28.81263809.jpeg', 'Real-time Speech Enhancement on Raw Signals', 'EETimes announcer: Welcome to Brains and Machines, a deep dive into neuromorphic engineering and biologically-inspired technology. In this episode, we hear from key technical people at the Southern California-based AI hardware company BrainChip. Your hosts are Dr. Sunny Bains of University College London, and Dr. Giulia D’Angelo of the Czech Technical University in Prague.', '2025-02-01 00:42:55'),
(5, 3, '../admin/uploads/images/post_679ff0370ef695.86425831.jpeg', 'A Lightweight Spatiotemporal Network for Online Eye Tracking', 'Giulia D’Angelo (GDA): Welcome to Brains and Machines. I am Giulia D’Angelo…\r\n\r\nSunny Bains (SB): … and I’m Sunny Bains.\r\n\r\n\r\nGDA: In today’s episode, Sunny talks to five of the engineers and computer scientists working at BrainChip, including the company’s Chief Technology Officer, Dr Tony Lewis. There are links to their work and some of the specific papers we will be discussing on our website—you can check them out at BrainsandMachines.net. After the interview, we will be talking to Ralph Etienne-Cummings from Johns Hopkins University about the issues raised.\r\n\r\nSB: Thanks, Giulia.\r\n\r\nBrainChip is based in Laguna Hills in Orange County and is probably best known for its Akita chip. Today, we’ll look at the company’s business strategy, their new flavor of neural network that’s intended to run at the edge—including both how it works and what results they’ve had—as well as providing a little insight into their strategy with their next iteration of chip.', '2025-02-01 01:36:04'),
(6, 3, '../admin/uploads/images/post_679ff03e240b03.75316471.jpeg', 'AI Applications at the Edge', 'YRP: Traditionally, we use something called a spatial-temporal convolution network. So in tradition, in order to perform temporal, let’s say, convolution, you have to store or buffer all the previous frames. So let’s say you want a context of 30 frames. Then you literally, at each layer, have to buffer 30 frames—which gets magnified by the spatial dimension. So obviously this is not a very edge-friendly way to approach it.\r\n\r\nIn our TENNs network, we have what I guess we can think of as a very intelligent online compression of the historical frame. So we don’t actually have to explicitly buffer previous frames; it’s more like a continuous compression of the historical context into a single spatiotemporal feature. So it’s much less memory-bound in our case.\r\n\r\nSB: Key to the working of these networks is the way time is represented, using Legendre polynomials. These not only make the networks more efficient, but also more representative of physical reality.\r\n\r\nYRP: So the Legendre polynomial is derived from a set of physical differential equations. Let’s say we want to approximate the past trajectory of the car—we can sort of project the trajectory into these orthogonal polynomial bases, and the coefficients of these polynomial bases basically form a very minimal compression of the previous continuous trajectory of the car. So we chose the Legendre polynomial precisely because there’s an underlying physical system basically describing it.', '2025-02-01 01:36:13'),
(8, 7, '../admin/uploads/images/post_679ff044983361.05792173.jpeg', 'TENNs-PLEIADES: Building Temporal Kernels with Orthogonal Polynomials', 'Yan Ru Pei (YRP): So Temporal Event Neural Networks, or TENNs, are basically neural networks that can leverage long-range temporal dependencies. And a wide range of tasks nowadays require a long context—one popular example being large language modeling. So, when a human reads a novel, they have—at the back of their mind—sentences or paragraphs from a long time ago, or even from the previous chapter. To establish this sort of long context, you need a model that can sort of memorize the past, or compress the history of the past in a very intelligent way.\r\n\r\nSo large language models are obviously the most popular, but even for audio processing—or any signal processing in general—you require some sort of historical context. So really the goal of the network is to leverage context to make intelligent predictions based on temporal correlations in the past.\r\n\r\nSB: These applications are both sound-based, and so essentially one-dimensional. However, Rudy says the network is particularly efficient when it comes to the kind of 2D tasks required for vision. This is important because they tend to scale very badly in traditional networks.\r\n\r\n', '2025-02-01 01:49:27'),
(9, 7, '../admin/uploads/images/post_679ff04ac07776.21442535.jpeg', '2025 Foundry Growth Forecast', 'Chip foundry growth is likely to reach 20% in 2025, led mainly by TSMC and smaller rivals that have caught the AI wave, according to Counterpoint Research.\r\n\r\nThat projection shows growth slowing slightly from last year. The foundry segment of the chip industry in 2024 grew 22%, rebounding from a slump in 2023, Counterpoint said.\r\n\r\nAn expansion of AI in data centers and edge computing has driven demand for chips made at leading-edge nodes. TSMC captured the momentum by making 5/4-nm and 3-nm chips combined with advanced-packaging technologies, such as the company’s proprietary CoWoS technology.\r\n\r\n“We expect overall foundry utilization to be around 80% in 2025, with advanced nodes maintaining higher utilization than mature nodes,” Counterpoint analyst Adam Chang told EE Times. “Chinese mature-node foundries are likely to see stronger demand compared to their non-China peers, driven by domestic localization efforts.”', '2025-02-01 01:59:52'),
(10, 7, '../admin/uploads/images/post_679ff050b17505.91054247.jpeg', 'TSMC', 'Chip foundry growth is likely to reach 20% in 2025, led mainly by TSMC and smaller rivals that have caught the AI wave, according to Counterpoint Research.\r\n\r\nThat projection shows growth slowing slightly from last year. The foundry segment of the chip industry in 2024 grew 22%, rebounding from a slump in 2023, Counterpoint said.\r\n\r\nAn expansion of AI in data centers and edge computing has driven demand for chips made at leading-edge nodes. TSMC captured the momentum by making 5/4-nm and 3-nm chips combined with advanced-packaging technologies, such as the company’s proprietary CoWoS technology.\r\n\r\n“We expect overall foundry utilization to be around 80% in 2025, with advanced nodes maintaining higher utilization than mature nodes,” Counterpoint analyst Adam Chang told EE Times. “Chinese mature-node foundries are likely to see stronger demand compared to their non-China peers, driven by domestic localization efforts.”', '2025-02-01 02:00:12'),
(11, 16, '../admin/uploads/images/post_67abda842da295.06794322.png', 'vGaN Device and Results', 'Many different approaches are being tried to create vGaN devices. These include Sandia National Labs trench gate vertical MOSFET, a JFET architecture from NexGen Power Systems, planar gate MOSFETs from Odyssey Semiconductor, FinFETs, etc. The Current Aperture Vertical Electron Transistor (CAVEAT) proposed by Yaacov in 2004 has been optimized by the authors in this study. The device cross-section is depicted in Figure 2.\r\n\r\nIn the CAVEAT, the source region is comprised of the two-dimensional electron gas (2DEG) formed, as in the HEMT, in the GaN channel near the AlGaN/GaN interface. A trench aperture links the 2DEG to the drain formed in the n-GaN region below the aperture. The Schottky gate located above the aperture modulates the device’s current flow.\r\n\r\n', '2025-02-11 23:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`, `image`) VALUES
(29, 2, 'Settings for PSRR bench measurements setup', 'The PSRR measurement is performed with the Bode 100. The Gain/Phase measurement type should be chosen in the Bode Analyzer Suite software as shown', '2025-01-15 23:15:36', '2025-02-11 22:57:19', '../admin/uploads/images/post_679fefeac11fa9.43006447.jpeg'),
(30, 1, 'LED headlights: Thank goodness for the bright(nes)s', 'They’re the tiny shiny things at the upper corners of the front bumper of the “stock” photo, just below the air intake “scoops”. In her case, bumper-colored plastic pieces take their places (and the on/off control switch normally at the steering wheel doesn’t exist either, of course, nor apparently does the intermediary wiring harness).', '2025-01-16 11:14:30', '2025-02-11 22:57:46', '../admin/uploads/images/post_679fefefd668d8.53799532.jpeg'),
(33, 1, 'What You Need to Know ', 'Purchasing from non-authorized sources can lead to the following: \r\nNo access to manufacturer-backed warranties or technical support \r\nAn inconsistent supply chain and an increased risk of supply chain disruptions. \r\nThere is no guarantee of compliance with industry standards, which increases the risks of substandard and counterfeit products. \r\nThe consequences of allowing substandard or counterfeit products to enter the supply chain include: \r\nReduced production yields and increased rework \r\nThe introduction of malware or changes that enable third parties to access the software \r\nIncreased in-service failures and reduced reliability \r\nHeightened risks and financial liability associated with catastrophic system failure \r\nPotential reputational damage\r\nIt is safer to assume that all semiconductors sourced outside authorized channels are potentially counterfeits. ', '2025-01-26 22:51:09', '2025-02-11 22:59:24', '../admin/uploads/images/post_679feffb24e237.63936655.jpeg'),
(34, 1, 'BrainChip’s IP for Targeting AI Applications at the Edge', 'Tony Lewis, CTO for BrainChip, and four other key scientists talk to Sunny Bains of the University College London. They discuss their business strategy, their temporal event-based neural network (TENN), and the next iteration of the Akida chip. Discussion follows with Giulia D’Angelo from the Czech Technical University in Prague and Ralph Etienne-Cummings of Johns Hopkins University.', '2025-01-26 22:57:01', '2025-02-11 23:00:01', '../admin/uploads/images/post_679bb2a74ea621.77199432.png'),
(35, 3, 'TSMC', 'In its quarterly results announced in January, TSMC forecast its 2025 sales will grow by as much as 26%.\r\n\r\nFab utilization for leading-edge nodes remains strong in 2025, driven by demand from AI leader Nvidia and smartphone chip designers Apple, Qualcomm and MediaTek, according to Counterpoint.\r\n\r\nUtilization is a key indicator of profitability in the capital-intensive chip industry. Recovery for mature nodes, defined as 28/22 nm and above, is relatively sluggish due to weak end-market demand across consumer electronics, networking, automotive and industrial segments, Counterpoint said.\r\n\r\n“Foundries with strong silicon-on-insulator capabilities, such as GlobalFoundries, Tower and TSMC, are well positioned to benefit from the growing silicon photonics market,” Chang told EE Times. “However, the scale of this business remains relatively small compared to mainstream semiconductor demand. We believe TSMC will remain the primary beneficiary of cloud AI demand, given its dominance in advanced nodes and advanced packaging.”', '2025-01-30 15:55:57', '2025-02-11 23:04:20', '../admin/uploads/images/post_679bb275ca9142.15144848.png'),
(37, 3, 'Intel', 'TSMC is the leader in advanced packaging, but it is not the only foundry benefiting.\r\n', '2025-01-30 16:07:35', '2025-02-11 23:14:37', '../admin/uploads/images/post_679ff001536d74.83900450.jpeg'),
(42, 3, 'How to measure PSRR of PMIC', ' This article serves as a practical guide to measuring PSRR for power management ICs (PMICs) and offering clear and comprehensive instructions.', '2025-01-30 17:07:15', '2025-02-11 23:14:23', '../admin/uploads/images/post_679bb1c35dc096.50490119.png'),
(47, 16, 'vGaN Device and Results', 'Many different approaches are being tried to create vGaN devices. These include Sandia National Labs trench gate vertical MOSFET, a JFET architecture from NexGen Power Systems, planar gate MOSFETs from Odyssey Semiconductor, FinFETs, etc. The Current Aperture Vertical Electron Transistor (CAVEAT) proposed by Yaacov in 2004 has been optimized by the authors in this study. The device cross-section is depicted in Figure 2.\r\n\r\nIn the CAVEAT, the source region is comprised of the two-dimensional electron gas (2DEG) formed, as in the HEMT, in the GaN channel near the AlGaN/GaN interface. A trench aperture links the 2DEG to the drain formed in the n-GaN region below the aperture. The Schottky gate located above the aperture modulates the device’s current flow.\r\n\r\n', '2025-02-11 23:16:55', '2025-02-11 23:18:23', 'uploads/images/post_67abda67c4db65.08981111.png'),
(49, 16, 'bleona', 'ssjn', '2025-02-12 09:05:12', '2025-02-12 09:05:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `role`, `created_at`, `updated_at`) VALUES
(1, 'olsa1', 'c', '1bleona', 'user', '2025-01-26 23:51:43', '2025-02-01 01:38:30'),
(2, '2', 'bleona1', '2', 'user', '2025-01-26 23:52:25', '2025-01-30 20:25:27'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '2025-01-26 23:53:02', '2025-01-26 23:53:12'),
(4, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', 'user', '2025-01-30 20:29:03', '2025-01-30 20:29:03'),
(5, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', 'user', '2025-01-30 20:29:06', '2025-01-30 20:29:06'),
(8, 'x', '9dd4e461268c8034f5c8564e155c67a6', 'x', 'user', '2025-02-01 01:38:17', '2025-02-01 01:38:17'),
(9, 'x', '9dd4e461268c8034f5c8564e155c67a6', 'x', 'user', '2025-02-01 01:38:20', '2025-02-01 01:38:20'),
(10, 'olsa', '79bd342134612bbaa1e14ca75db671e6', 'd d', 'user', '2025-02-01 01:40:11', '2025-02-01 01:40:11'),
(11, 'ds', '03c7c0ace395d80182db07ae2c30f034', 's', 'user', '2025-02-01 01:40:24', '2025-02-01 01:40:24'),
(12, 'bleona1', '170a60edea50fa381b812c4b1fa8ed1e', 'bleona1', 'user', '2025-02-02 17:23:40', '2025-02-02 17:23:40'),
(13, 'blend', 'b84299d3ab0d694edc65265e4787d231', 'blend', 'user', '2025-02-02 18:27:13', '2025-02-02 18:27:13'),
(14, 'bleoni', '494787fd47f5c71a890ce524f51dff2a', 'bleoni', 'user', '2025-02-02 18:28:57', '2025-02-02 18:28:57'),
(15, 'teknologji', '350b9e3b1c3ceb3b6f4ff37573eefb06', 'teknologji', 'user', '2025-02-02 21:01:19', '2025-02-02 21:01:19'),
(16, 'bleona', '6fc3efbaf87820ebfe695de8683fe6c6', 'bleona', 'user', '2025-02-11 23:16:32', '2025-02-11 23:23:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_technologies`
--
ALTER TABLE `about_technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_post`
--
ALTER TABLE `article_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_technologies`
--
ALTER TABLE `about_technologies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `article_post`
--
ALTER TABLE `article_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_post`
--
ALTER TABLE `article_post`
  ADD CONSTRAINT `article_post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
