#!/bin/bash

# Bboy Poter - Heroku Deployment Script

echo "🚀 Deploying Bboy Poter to Heroku..."

# Check if Heroku CLI is installed
if ! command -v heroku &> /dev/null; then
    echo "❌ Heroku CLI not found. Please install it first:"
    echo "   https://devcenter.heroku.com/articles/heroku-cli"
    exit 1
fi

# Check if logged in to Heroku
if ! heroku auth:whoami &> /dev/null; then
    echo "❌ Not logged in to Heroku. Please run: heroku login"
    exit 1
fi

# Create Heroku app if it doesn't exist
echo "📦 Creating Heroku app..."
heroku create bboypoter --region us

# Set buildpack for PHP
echo "🔧 Setting PHP buildpack..."
heroku buildpacks:set heroku/php

# Deploy to Heroku
echo "🚀 Deploying to Heroku..."
git push heroku main

echo "✅ Deployment complete!"
echo "🌐 Your app is available at: https://bboypoter.herokuapp.com"
