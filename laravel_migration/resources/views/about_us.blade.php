@extends('layouts.app')

@section('title', 'About Us | AMD SOL')
@section('meta_description', 'About AMD SOL - Leading Medical Billing Company')
@section('meta_keywords', 'About Us, Medical Billing, Healthcare Solutions')

@section('content')
<!-- Hero Section --><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why AMDSOL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            overflow-x: hidden;
        }

        body {
            font-family: Poppins, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            overflow-x: hidden;
        }

        .about-section {
            padding: 60px 20px;
            text-align: center;
            background-color: #000000B2;
            background-image: url('{{ asset('assets/images/about_us/bg.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            max-width: 100%;
            width: 100%;
            height: 371px;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            box-sizing: border-box;
        }

        .about-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .about-section * {
            position: relative;
            z-index: 2;
        }

        .about-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #fff;
        }

        .why-section {
            max-width: 100%;
            margin: 60px auto;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .top-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            margin-bottom: 60px;
            position: relative;
            width: 100%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .doctor-container {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        .doctor-ellipse {
            position: absolute;
            width: 271px;
            height: 271px;
            background-color: #002147;
            border-radius: 50%;
            filter: blur(80px);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 1;
            z-index: 0;
        }

        .doctor-image {
            width: 100%;
            max-width: 400px;
            filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.2));
            position: relative;
            z-index: 1;
        }

        .why-text h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #000;
        }

        .why-text p {
            color: white;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .main-description {
            color: #666 !important;
        }

        .quote-text {
            color: #fff !important;
        }

        .quote-box {
            background-color: #0a2540;
            color: white;
            padding: 50px 60px;
            border-radius: 20px;
            position: relative;
            max-width: 500px;
            margin-left: auto;
        }

        .quote-box::before {
            content: '';
            width: 35px;
            height: 35px;
            background-image: url('{{ asset('assets/images/about_us/coma.png') }}');
            background-size: contain;
            background-repeat: no-repeat;
            position: absolute;
            top: 25px;
            left: 30px;
            filter: brightness(0) invert(1);
            opacity: 0.4;
        }

        .quote-box::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 40px;
            width: 0;
            height: 0;
            border-top: 70px solid #0a2540;
            border-right: 110px solid transparent;
            transform: rotate(-10deg);
        }

        .quote-icon-right {
            position: absolute;
            bottom: 25px;
            right: 30px;
            width: 35px;
            height: 35px;
            opacity: 0.4;
            transform: rotate(180deg);
            filter: brightness(0) invert(1);
        }

        .mission-vision {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 60px;
            margin-top: 60px;
        }

        .circle-container {
            text-align: center;
        }

        .circle {
            width: 351px;
            height: 351px;
            border-radius: 50%;
            border: 16.5px solid #f0f0f0;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px;
            background: #fff;
            transition: all 0.3s ease;
        }

        .circle:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .circle.mission {
            border-top: 16.5px solid #0a2540;
            border-left: 16.5px solid #0a2540;
        }

        .circle.vision {
            border-bottom: 16.5px solid #0a2540;
            border-right: 16.5px solid #0a2540;
        }

        .circle-icon {
            width: 60px;
            height: 60px;
            font-size: 3rem;
            margin: 0 auto 15px;
            color: #4a9eff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #000;
            text-align: center;
        }

        .circle p {
            width: 100%;
            max-width: 250px;
            font-size: 15px;
            font-weight: 400;
            color: #666;
            line-height: 1.5;
            text-align: justify;
            margin: 0 auto;
        }

        .mission-vision-title {
            font-size: 2rem;
            font-weight: bold;
            color: #000;
        }

        @media (max-width: 768px) {
            .about-section {
                height: 300px;
                padding: 40px 15px;
                width: 100vw;
                max-width: 100%;
            }

            .about-section h2 {
                font-size: 2rem;
            }

            .why-section {
                padding: 0 15px;
                width: 100%;
            }

            .top-content {
                grid-template-columns: 1fr;
                gap: 30px;
                display: flex;
                flex-direction: column;
                width: 100%;
                max-width: 100%;
            }

            .why-text {
                order: 1;
                text-align: center;
                width: 100%;
            }

            .doctor-container {
                order: 2;
                max-width: 300px;
                margin: 0 auto;
                width: 100%;
            }

            .doctor-image {
                max-width: 100%;
                width: 100%;
                height: auto;
            }

            .why-text h2 {
                text-align: center;
            }

            .main-description {
                text-align: center;
            }

            .quote-box {
                margin: 0 auto;
                padding: 45px 35px;
                text-align: left;
                width: 100%;
                max-width: 100%;
            }

            .quote-box::before {
                top: 20px;
                left: 20px;
            }

            .quote-icon-right {
                bottom: 20px;
                right: 20px;
            }

            .mission-vision {
                flex-direction: column;
                gap: 40px;
                width: 100%;
                padding: 0 15px;
            }

            .mission-vision-title {
                font-size: 1.8rem;
            }

            .circle {
                width: 100%;
                max-width: 320px;
                height: 320px;
                padding: 55px 40px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: 0 auto;
            }

            .circle-icon {
                width: 50px;
                height: 50px;
                font-size: 2.3rem;
                margin-bottom: 12px;
            }

            .circle h3 {
                font-size: 1.5rem;
                margin-bottom: 10px;
                text-align: center;
            }

            .circle p {
                font-size: 14px;
                max-width: 220px;
                line-height: 1.5;
                padding: 0;
                text-align: justify;
            }

            .core-values-section {
                padding: 40px 15px;
                width: 100%;
            }

            .core-values-section h2 {
                font-size: 36px;
            }

            .core-values-section > p {
                font-size: 16px;
            }

            .values-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
                width: 100%;
            }

            .value-box {
                padding: 60px 25px 35px;
                margin-top: 80px;
                width: 100%;
            }

            .value-icon {
                width: 60px;
                height: 60px;
            }

            .value-box h3 {
                font-size: 18px;
            }

            .value-box p {
                font-size: 14px;
            }

            .technical-mastery-section {
                padding: 40px 15px;
                width: 100%;
            }

            .tech-cards {
                grid-template-columns: 1fr;
                gap: 25px;
                width: 100%;
            }

            .operational-excellence-section {
                padding: 40px 15px;
                width: 100%;
            }

            .consultation-section {
                padding: 0 15px;
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .about-section {
                height: 250px;
                padding: 30px 10px;
            }

            .about-section h2 {
                font-size: 1.5rem;
            }

            .why-text {
                text-align: center;
            }

            .why-text h2 {
                font-size: 1.8rem;
            }

            .quote-box {
                padding: 40px 30px;
            }

            .quote-box::before {
                top: 18px;
                left: 18px;
                width: 30px;
                height: 30px;
            }

            .quote-icon-right {
                bottom: 18px;
                right: 18px;
                width: 30px;
                height: 30px;
            }

            .circle {
                width: 100%;
                max-width: 290px;
                height: 290px;
                padding: 45px 30px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: 0 auto;
            }

            .circle-icon {
                width: 45px;
                height: 45px;
                font-size: 2rem;
                margin-bottom: 12px;
            }

            .circle h3 {
                font-size: 1.5rem;
                margin-bottom: 10px;
                text-align: center;
            }

            .circle p {
                font-size: 11px;
                max-width: 170px;
                line-height: 1.3;
                padding: 0;
                text-align: justify;
            }

            .mission-vision-title {
                font-size: 1.5rem;
            }

            .core-values-section {
                padding: 30px 10px;
            }

            .core-values-section h2 {
                font-size: 28px;
            }

            .core-values-section > p {
                font-size: 15px;
            }

            .values-container {
                flex-direction: column;
                gap: 30px;
                align-items: center;
            }

            .value-card {
                width: 100%;
                max-width: 280px;
                height: auto;
                padding: 25px 20px;
            }

            .technical-mastery-section {
                padding: 30px 10px;
            }

            .operational-excellence-section {
                padding: 30px 10px;
            }

            .consultation-section {
                padding: 0 10px;
            }

            .consultation-box {
                padding: 40px 20px;
            }
        }

        .technical-mastery-section {
            max-width: 100%;
            margin: 80px auto;
            padding: 60px 20px;
            text-align: center;
            box-sizing: border-box;
        }

        .technical-mastery-section h2 {
            font-size: 2.8rem;
            margin-bottom: 15px;
            color: #000;
            font-weight: 700;
        }

        .technical-mastery-section>p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 50px;
        }

        .tech-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .tech-card {
            background: #fff;
            border-radius: 15px;
            padding: 40px 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .tech-card::before {
            content: '';
            position: absolute;
            top: -100%;
            left: 0;
            width: 100%;
            height: 100%;
            background: #002147;
            transition: top 0.4s ease;
            z-index: 1;
        }

        .tech-card:hover::before {
            top: 0;
        }

        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .tech-card-icon,
        .tech-card h3,
        .tech-card p {
            position: relative;
            z-index: 2;
        }

        .tech-card:hover h3 {
            color: #fff;
        }

        .tech-card:hover p {
            color: #fff;
        }

        .tech-card-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
        }

        .tech-card-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .tech-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #000;
            font-weight: 700;
        }

        .tech-card p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        @media (max-width: 968px) {
            .tech-cards {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .technical-mastery-section h2 {
                font-size: 2.2rem;
            }
        }

        .operational-excellence-section {
            max-width: 100%;
            margin: 80px auto;
            padding: 60px 20px;
            text-align: center;
            background-color: #f5f5f5;
            box-sizing: border-box;
        }

        .operational-excellence-section h2 {
            font-size: 2.8rem;
            margin-bottom: 60px;
            color: #000;
            font-weight: 700;
        }

        .flow-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .flow-row {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 0;
            position: relative;
        }

        .flow-row-center {
            justify-content: center;
        }

        .flow-connector-l-shape {
            width: 100%;
            max-width: 900px;
            margin: -5px auto 0;
            position: relative;
            height: 80px;
        }

        .flow-connector-l-shape svg {
            width: 89%;
            height: 100%;
        }

        .connector-path {
            fill: none;
            stroke: #1e3a8a;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .flow-circle {
            width: 150px;
            height: 150px;
            border: 4px solid #1e3a8a;
            border-radius: 50%;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .flow-circle::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 50%;
            background: #fff;
            border: 4px solid #1e3a8a;
            transition: filter 0.3s ease;
            z-index: 1;
        }

        .flow-circle:hover::before {
            filter: blur(4px);
        }

        .flow-number,
        .flow-icon,
        .flow-text {
            position: relative;
            z-index: 2;
        }

        .flow-circle-tooltip {
            position: absolute;
            top: -110%;
            left: 50%;
            transform: translateX(-50%);
            width: 260px;
            padding: 20px;
            background: #fff;
            border: 3px solid #1e3a8a;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            z-index: 150;
            text-align: center;
        }

        .flow-circle:hover .flow-circle-tooltip {
            opacity: 1;
            visibility: visible;
        }

        .flow-circle-tooltip p {
            font-size: 15px;
            line-height: 1.6;
            color: #333;
            margin: 0;
            font-weight: 400;
        }

        .flow-number {
            position: absolute;
            top: 5px;
            left: 5px;
            width: 30px;
            height: 30px;
            background: #fff;
            border: 2px solid #1e3a8a;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            font-size: 1rem;
            color: #1e3a8a;
            z-index: 10;
        }

        .flow-icon {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
            font-size: 2.5rem;
        }

        .flow-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .flow-text {
            width: 100px;
            height: auto;
            font-size: 11px;
            font-weight: 400;
            color: #000;
            text-align: center;
            line-height: 1.2;
            margin: 0;
            padding: 0 5px;
        }

        .flow-circle h3 {
            font-size: 0.85rem;
            color: #000;
            font-weight: 600;
            text-align: center;
            line-height: 1.2;
        }

        .flow-connector-h {
            width: 50px;
            height: 3px;
            background: #1e3a8a;
        }

        @media (max-width: 968px) {
            .flow-connector-l-shape {
                display: block;
                height: 50px;
                width: 3px;
                margin: 0 auto;
                background: #1e3a8a;
            }

            .flow-connector-l-shape svg {
                display: none;
            }

            .flow-container {
                position: relative;
            }

            .flow-container::before {
                content: '';
                position: absolute;
                left: 50%;
                top: 75px;
                bottom: 75px;
                width: 3px;
                background: #1e3a8a;
                transform: translateX(-50%);
                z-index: 0;
            }

            .flow-row {
                flex-direction: column;
                gap: 0;
                position: relative;
                z-index: 1;
            }

            .flow-connector-h {
                width: 3px;
                height: 50px;
                background: #1e3a8a;
            }

            .flow-circle {
                width: 130px;
                height: 130px;
                margin: 0;
                background: #fff;
                position: relative;
                z-index: 2;
            }

            .flow-icon {
                width: 40px;
                height: 40px;
            }

            .flow-text {
                font-size: 10px;
            }

            .operational-excellence-section h2 {
                font-size: 2.2rem;
            }
        }

        .consultation-section {
            max-width: 100%;
            margin: 80px auto 60px;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .consultation-box {
            background: linear-gradient(135deg, #002147 0%, #0a2540 100%);
            border-radius: 40px;
            padding: 60px 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .consultation-box::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(74, 158, 255, 0.1);
            border-radius: 50%;
            filter: blur(80px);
        }

        .consultation-box::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: rgba(74, 158, 255, 0.1);
            border-radius: 50%;
            filter: blur(80px);
        }

        .consultation-content {
            position: relative;
            z-index: 2;
        }

        .consultation-box h2 {
            font-size: 2.5rem;
            color: #fff;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .consultation-box p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 30px;
        }

        .consultation-btn {
            display: inline-block;
            background: #fff;
            color: #002147;
            padding: 15px 50px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .consultation-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            background: #f0f0f0;
        }

        @media (max-width: 768px) {
            .consultation-box {
                border-radius: 30px;
                padding: 50px 30px;
            }

            .consultation-box h2 {
                font-size: 2rem;
            }

            .consultation-box p {
                font-size: 1rem;
            }

            .consultation-btn {
                padding: 12px 35px;
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .consultation-box {
                border-radius: 25px;
                padding: 40px 20px;
            }

            .consultation-box h2 {
                font-size: 1.8rem;
            }

            .consultation-btn {
                padding: 12px 30px;
                font-size: 0.95rem;
            }
        }
        /* Compliance Section */
.compliance-section {
    padding: 60px 20px;
    margin: 0;
    background-color: #f8f9fa;
    text-align: center;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.compliance-section h2 {
    font-size: 2.2rem;
    color: #000;
    font-weight: 700;
    margin-bottom: 10px;
}

.compliance-section .subtitle {
    font-size: 0.9rem;
    color: #6c757d;
    margin-bottom: 40px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.compliance-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
}

.compliance-card {
    background: #fff;
    border-radius: 24px;
    padding: 40px 25px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    position: relative;
    border: 2px solid transparent;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 100%;
    max-width: 277px;
    height: 280px;
    margin: 0 auto;
}

/* Top-right corner border */
.compliance-card::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 120px;
    height: 70px;
    border-top: 5px solid #002b5c;
    border-right: 5px solid #002b5c;
    border-radius: 0 24px 0 0;
}

/* Bottom-left corner border */
.compliance-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 120px;
    height: 70px;
    border-bottom: 5px solid #002b5c;
    border-left: 5px solid #002b5c;
    border-radius: 0 0 0 24px;
}

.compliance-card:hover {
    border-color: #002b5c;
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
}

.compliance-card-image {
    width: 70px;
    height: 70px;
    margin-bottom: 20px;
    background: #002b5c;
    border-radius: 14px;
    padding: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.compliance-card-image img {
    width: 40px;
    height: 40px;
    object-fit: contain;
}

.compliance-card h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #000;
    margin-bottom: 15px;
    line-height: 1.3;
    text-align: center;
    width: 100%;
    display: block;
}

.compliance-card p {
    font-size: 0.9rem;
    color: #666;
    line-height: 1.5;
    margin: 0;
    text-align: center;
    width: 100%;
    display: block;
}

.compliance-card-content {
    z-index: 3;
    position: relative;
}

.compliance-icon {
    display: none;
}

.compliance-icon i {
    font-size: 28px;
    color: #fff;
}

.compliance-card h3 {
    font-size: 1.2rem;
    color: #002b5c;
    font-weight: 700;
    margin-bottom: 15px;
    text-align: left;
}

.compliance-card p {
    font-size: 0.95rem;
    color: #6c757d;
    line-height: 1.6;
    text-align: left;
}

@media (max-width: 768px) {
    .compliance-section h2 {
        font-size: 2rem;
    }
    
    .compliance-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}
    </style>
</head>

<body>
    <section class="about-section">
        <h2>About</h2>
    </section>

    <section class="why-section">
        <div class="top-content">
            <div class="doctor-container">
                <div class="doctor-ellipse"></div>
                <img src="{{ asset('assets/images/about_us/doc.png') }}" alt="Doctor" class="doctor-image">
            </div>
            <div class="why-text">
                <h2>Why AMDSOL?</h2>
                <p class="main-description">Backed by 24 years of combined expertise and a proven history of scaling 20+
                    Illinois practices into high-revenue leaders. We protect your financial health so you can focus
                    exclusively on protecting patient wellbeing. We understand that to secure the trust of
                    high-performing clinics, our presentation must move beyond surface-level promises. We are not just
                    an outsourcing firm; we are a Revenue Intelligence partner. We replace traditional medical billing
                    with Revenue Intelligence.</p>
                <div class="quote-box">
                    <p class="quote-text">In an era where 68% of practices struggle with denial rates over 10%, you need
                        more than a billing vendor; you need a financial navigator.</p>
                    <img src="{{ asset('assets/images/about_us/coma.png') }}" alt="Quote" class="quote-icon-right">
                </div>
            </div>
        </div>

        <div class="mission-vision">
            <div class="circle-container">
                <div class="circle mission">
                    <div class="circle-icon">🎯</div>
                    <h3>Our Mission</h3>
                    <p>We simplify the "maze" of insurance policies and regulations so you can focus on the heart of
                        medicine.</p>
                </div>
            </div>
            <div class="mission-vision-title">Our Mission<br>& Vision</div>
            <div class="circle-container">
                <div class="circle vision">
                    <div class="circle-icon">👁️</div>
                    <h3>Our Vision</h3>
                    <p>We never pre-commit; we believe in doing the right things the right way the first time. We treat
                        your revenue as if it were our own.</p>
                </div>
            </div>
        </div>
    </section>
      <section class="compliance-section">
        <h2>Compliance & Trust</h2>
        <p class="subtitle">Your data, billing, and communication are handled with the highest standards of security and compliance.</p>
        
        <div class="compliance-grid">
            <div class="compliance-card">
                <div class="compliance-card-image">
                    <img src="{{ asset('assets/images/about_us/logo 1.png') }}" alt="HIPAA Compliant">
                </div>
                <h3>Integrity-First Partnership</h3>
                <p>We treat your revenue as if it were our own</p>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-card-image">
                    <img src="{{ asset('assets/images/about_us/heart.png') }}" alt="Secure Data">
                </div>
                <h3>Clinical Empathy</h3>
                <p>Understanding that every code represents a human life</p>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-card-image">
                    <img src="{{ asset('assets/images/about_us/eye.png') }}" alt="Certified Experts">
                </div>
                <h3>Radical Transparency</h3>
                <p>100% visibility into your collections with no hidden fees ever</p>
            </div>
            
            <div class="compliance-card">
                <div class="compliance-card-image">
                    <img src="{{ asset('assets/images/about_us/puzzel.png') }}" alt="Reliable Process">
                </div>
                <h3>Can-Do Culture</h3>
                <p>We employ problem- solvers who thrive on resolving the toughest insurance rejections</p>
            </div>
        </div>
    </section>


    <section class="technical-mastery-section">
        <h2>Technical Mastery</h2>
        <p>Expert teams, continuous operations, and proven accuracy</p>

        <div class="tech-cards">
            <div class="tech-card">
                <div class="tech-card-icon">
                    <img src="{{ asset('assets/images/about_us/clock.png') }}" alt="Clock Icon">
                </div>
                <h3>Zero-Lag Support</h3>
                <p>We operate in a 24/7 environment, ensuring your claims move while you sleep</p>
            </div>

            <div class="tech-card">
                <div class="tech-card-icon">
                    <img src="{{ asset('assets/images/about_us/people.png') }}" alt="Leadership Icon">
                </div>
                <h3>Senior Leadership Access</h3>
                <p>Unlike generic firms, our VPs and Directors are direct decision makers on your project no
                    bureaucratic delays</p>
            </div>

            <div class="tech-card">
                <div class="tech-card-icon">
                    <img src="{{ asset('assets/images/about_us/setting.png') }}" alt="setting Icon">
                </div>
                <h3>Stability of Service</h3>
                <p>We do not 'shuffle' resources, the team that knows your practice stays with your practice</p>
            </div>
        </div>
    </section>

    <section class="operational-excellence-section">
        <h2>Operational Excellence</h2>

        <div class="flow-container">
            <div class="flow-row">
                <div class="flow-circle">
                    <div class="flow-number">1</div>
                    <div class="flow-icon"><img src="{{ asset('assets/images/about_us/note.png') }}" alt=""></div>
                    <p class="flow-text">Front-End Integrity</p>
                    <div class="flow-circle-tooltip">
                        <p>We ensure accurate patient registration and insurance verification at the front desk,
                            preventing claim denials before they start.</p>
                    </div>
                </div>
                <div class="flow-connector-h"></div>
                <div class="flow-circle">
                    <div class="flow-number">2</div>
                    <div class="flow-icon"><img src="{{ asset('assets/images/about_us/file.png') }}" alt=""></div>
                    <p class="flow-text">Precision Mid-Cycle</p>
                    <div class="flow-circle-tooltip">
                        <p>Our experts handle charge capture, coding accuracy, and claim scrubbing to maximize
                            reimbursement and minimize rejections.</p>
                    </div>
                </div>
                <div class="flow-connector-h"></div>
                <div class="flow-circle">
                    <div class="flow-number">3</div>
                    <div class="flow-icon"><img src="{{ asset('assets/images/about_us/message.png') }}" alt=""></div>
                    <p class="flow-text">Submission Strategy</p>
                    <div class="flow-circle-tooltip">
                        <p>Strategic claim submission with real-time tracking ensures faster payments and reduces the
                            time to reimbursement.</p>
                    </div>
                </div>
                <div class="flow-connector-h"></div>
                <div class="flow-circle">
                    <div class="flow-number">4</div>
                    <div class="flow-icon"><img src="{{ asset('assets/images/about_us/recycle.png') }}" alt=""></div>
                    <p class="flow-text">Denial Intelligence</p>
                    <div class="flow-circle-tooltip">
                        <p>We analyze denial patterns and implement proactive strategies to prevent future denials and
                            recover lost revenue.</p>
                    </div>
                </div>
            </div>

            <div class="flow-connector-l-shape first-connector">
                <svg viewBox="0 0 1000 80" preserveAspectRatio="none">
                    <path class="connector-path" d="M 875 0 L 875 40 L 125 40 L 125 80" />
                </svg>
            </div>

            <div class="flow-row">
                <div class="flow-circle">
                    <div class="flow-number">5</div>
                    <div class="flow-icon"><img src="{{ asset('assets/images/about_us/increase.png') }}" alt=""></div>
                    <p class="flow-text">A/R Management</p>
                    <div class="flow-circle-tooltip">
                        <p>Proactive accounts receivable management with real-time insurance verification and follow-up
                            to minimize revenue leakage.</p>
                    </div>
                </div>
                <div class="flow-connector-h"></div>
                <div class="flow-circle">
                    <div class="flow-number">6</div>
                    <div class="flow-icon"><img src="{{ asset('assets/images/about_us/dolar.png') }}" alt=""></div>
                    <p class="flow-text">Financial Transparency</p>
                    <div class="flow-circle-tooltip">
                        <p>Complete visibility into your revenue cycle with detailed reporting and analytics for
                            informed decision-making.</p>
                    </div>
                </div>
                <div class="flow-connector-h"></div>
                <div class="flow-circle">
                    <div class="flow-number">7</div>
                    <div class="flow-icon"><img src="{{ asset('assets/images/about_us/call.png') }}" alt=""></div>
                    <p class="flow-text">Patient Advocacy</p>
                    <div class="flow-circle-tooltip">
                        <p>We provide compassionate patient billing support, improving satisfaction while ensuring
                            timely collections.</p>
                    </div>
                </div>
                <div class="flow-connector-h"></div>
                <div class="flow-circle">
                    <div class="flow-number">8</div>
                    <div class="flow-icon"><img src="{{ asset('assets/images/about_us/pc.png') }}" alt=""></div>
                    <p class="flow-text">The Dashboard</p>
                    <div class="flow-circle-tooltip">
                        <p>Real-time access to key performance metrics and financial data through our intuitive
                            dashboard interface.</p>
                    </div>
                </div>
            </div>

            <div class="flow-connector-l-shape second-connector">
                <svg viewBox="0 0 1000 80" preserveAspectRatio="none">
                    <path class="connector-path" d="M 875 0 L 875 40 L 375 40 L 375 80" />
                </svg>
            </div>

            <div class="flow-row flow-row-center">
                <div class="flow-circle">
                    <div class="flow-number">9</div>
                    <div class="flow-icon"><img src="{{ asset('assets/images/about_us/ticfk.png') }}" alt=""></div>
                    <p class="flow-text">The Trust Infrastructure</p>
                    <div class="flow-circle-tooltip">
                        <p>HIPAA-compliant systems and secure data handling ensure your practice and patient information
                            stays protected.</p>
                    </div>
                </div>
                <div class="flow-connector-h"></div>
                <div class="flow-circle">
                    <div class="flow-number">10</div>
                    <div class="flow-icon"><img src="{{ asset('assets/images/about_us/data.png') }}" alt=""></div>
                    <p class="flow-text">Specialty Depth</p>
                    <div class="flow-circle-tooltip">
                        <p>Specialized expertise across multiple medical specialties ensures accurate coding and maximum
                            reimbursement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="consultation-section">
        <div class="consultation-box">
            <div class="consultation-content">
                <h2>Schedule a Free Consultation</h2>
                <p>Protect and Optimize Your Revenue Today</p>
                <a href="{{ url('contact-us.php') }}" class="consultation-btn">Get Started</a>
            </div>
        </div>
    </section>

</body>

</html>
@endsection
