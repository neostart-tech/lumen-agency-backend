@extends('emails.layout')

@section('content')
    <h1 style="color: #05299E; font-size: 24px; font-weight: 700; margin-bottom: 20px;">Réinitialisation de mot de passe</h1>
    
    <p>Bonjour,</p>
    
    <p>Vous recevez cet e-mail car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte administrateur chez <strong>Lumen Agency</strong>.</p>
    
    <div style="text-align: center; margin: 30px 0;">
        <a href="{{ $url }}" class="button">Définir un nouveau mot de passe</a>
    </div>
    
    <div class="highlight-box">
        <p style="margin-bottom: 0;">Ce lien sécurisé expirera dans <strong>{{ $count }} minutes</strong>.</p>
    </div>
    
    <p>Si vous n'êtes pas à l'origine de cette demande, aucune action supplémentaire n'est requise. Votre compte reste sécurisé.</p>
    
    <div class="divider"></div>
    
    <p style="font-size: 12px; color: #64748b; line-height: 1.4;">
        Si vous rencontrez des problèmes avec le bouton ci-dessus, copiez et collez l'URL suivante dans votre navigateur :<br>
        <a href="{{ $url }}" style="color: #f29004; word-break: break-all;">{{ $url }}</a>
    </p>
@endsection
