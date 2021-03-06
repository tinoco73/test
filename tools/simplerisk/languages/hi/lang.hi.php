<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

ini_set('default_charset', 'utf-8');
define('DATETIME', 'Y-m-d g:i A T');
define('DATETIMESIMPLE', 'Y-m-d H:i');
define('DATESIMPLE', 'Y-m-d');

$lang = array(
    'Home'=>'घर',
    'RiskManagement'=>'जोखिम प्रबंधन',
    'Reporting'=>'रिपोर्टिंग',
    'Configure'=>'कॉन्फ़िगर करें',
    'MyProfile'=>'मेरी प्रोफ़ाइल',
    'Logout'=>'लॉग आउट',
    'LogInHere'=>'यहाँ में प्रवेश करें',
    'Username'=>'उपयोगकर्ता नाम',
    'Password'=>'पासवर्ड',
    'ForgotYourPassword'=>'अपना पासवर्ड भूल गए',
    'Login'=>'लॉगिन',
    'Reset'=>'रीसेट करें',
    'Send'=>'भेजें',
    'Update'=>'अद्यतन',
    'SendPasswordResetEmail'=>'पासवर्ड रीसेट ई-मेल भेजें',
    'PasswordReset'=>'पासवर्ड रीसेट',
    'ResetToken'=>'टोकन रीसेट करें',
    'RepeatPassword'=>'पासवर्ड दोहराएँ',
    'Submit'=>'सबमिट करें',
    'ProfileDetails'=>'प्रोफ़ाइल विवरण',
    'LastLogin'=>'लास्ट लॉग इन',
    'ChangePassword'=>'पासवर्ड परिवर्तित करें',
    'CurrentPassword'=>'वर्तमान पासवर्ड',
    'NewPassword'=>'नया पासवर्ड',
    'ConfirmPassword'=>'पासवर्ड की पुष्टि करें',
    'ConfigureRiskFormula'=>'जोखिम सूत्र को कॉन्फ़िगर करें',
    'ConfigureReviewSettings'=>'समीक्षा सेटिंग्स कॉन्फ़िगर करें',
    'AddAndRemoveValues'=>'जोड़ें और मानों को निकालें',
    'UserManagement'=>'उपयोगकर्ता प्रबंधन',
    'RedefineNamingConventions'=>'नामकरण की प्रथा को फिर से परिभाषित',
    'AuditTrail'=>'ऑडिट ट्रेल',
    'Extras'=>'एक्स्ट्रा कलाकार',
    'Announcements'=>'घोषणाएँ',
    'About'=>'के बारे में',
    'Impact'=>'प्रभाव',
    'Likelihood'=>'संभावना',
    'MitigationEffort'=>'शमन प्रयास',
    'Change'=>'परिवर्तन',
    'to'=>'करने के लिए',
    'AddANewUser'=>'एक नया उपयोगकर्ता जोड़ें',
    'Type'=>'प्रकार',
    'FullName'=>'पूरा नाम',
    'EmailAddress'=>'ई-मेल पता',
    'Teams'=>'Team(s)',
    'ALL'=>'सभी',
    'NONE'=>'कोई नहीं',
    'UserResponsibilities'=>'उपयोगकर्ता जिम्मेदारियों',
    'AbleToSubmitNewRisks'=>'नए जोखिम प्रस्तुत करने में सक्षम',
    'AbleToModifyExistingRisks'=>'मौजूदा जोखिम को संशोधित करने में सक्षम',
    'AbleToCloseRisks'=>'जोखिम को बंद करने में सक्षम',
    'AbleToPlanMitigations'=>'Mitigations योजना करने में सक्षम',
    'AbleToReviewLowRisks'=>'कम जोखिम की समीक्षा करने में सक्षम',
    'AbleToReviewMediumRisks'=>'मध्यम जोखिम की समीक्षा करने में सक्षम',
    'AbleToReviewHighRisks'=>'उच्च जोखिम की समीक्षा करने में सक्षम',
    'AllowAccessToConfigureMenu'=>'"मेनू कॉन्फ़िगर करने के लिए" पहुँच की अनुमति दें',
    'MultiFactorAuthentication'=>'बहु-कारक प्रमाणन',
    'None'=>'कोई नहीं',
    'Add'=>'जोड़ें',
    'ViewDetailsForUser'=>'उपयोगकर्ता के लिए विवरण देखें',
    'DetailsForUser'=>'उपयोगकर्ता के लिए विवरण',
    'Select'=>'का चयन करें',
    'EnableAndDisableUsers'=>'सक्षम करें और उपयोगकर्ताओं को अक्षम करें',
    'EnableAndDisableUsersHelp'=>'उपयोगकर्ता गतिविधियों का ऑडिट ट्रेल बनाए रखते हुए उपयोगकर्ता लॉगिन को अक्षम या सक्षम करने के लिए इस सुविधा का उपयोग करें',
    'DisableUser'=>'उपयोगकर्ता को अक्षम करें',
    'Disable'=>'अक्षम करें',
    'EnableUser'=>'उपयोगकर्ता को सक्षम करें',
    'Enable'=>'सक्षम करें',
    'DeleteAnExistingUser'=>'किसी मौजूदा उपयोगकर्ता को हटाएँ',
    'DeleteCurrentUser'=>'वर्तमान उपयोगकर्ता को हटाएँ',
    'Delete'=>'हटाएँ',
    'SendPasswordResetEmailForUser'=>'ई-मेल उपयोगकर्ता के लिए पासवर्ड रीसेट करें भेजें',
    'Category'=>'श्रेणी',
    'AddNewCategoryNamed'=>'नामक नई श्रेणी जोड़ें',
    'DeleteCurrentCategoryNamed'=>'वर्तमान श्रेणी नाम को हटाएँ',
    'Team'=>'टीम',
    'AddNewTeamNamed'=>'नई टीम का नाम जोड़ें',
    'DeleteCurrentTeamNamed'=>'वर्तमान टीम का नाम हटाएँ',
    'Technology'=>'प्रौद्योगिकी',
    'AddNewTechnologyNamed'=>'नई तकनीक का नाम जोड़ें',
    'DeleteCurrentTechnologyNamed'=>'वर्तमान प्रौद्योगिकी नाम हटाएँ',
    'SiteLocation'=>'साइट स्थान /',
    'AddNewSiteLocationNamed'=>'नया साइट/स्थान का नाम जोड़ें',
    'DeleteCurrentSiteLocationNamed'=>'हटाएँ वर्तमान साइट नाम स्थान /',
    'ControlRegulation'=>'नियंत्रण विनियमन',
    'AddNewControlRegulationNamed'=>'नया नियंत्रण विनियमन नाम जोड़ें',
    'DeleteCurrentControlRegulationNamed'=>'वर्तमान नियंत्रण विनियमन नाम हटाएँ',
    'RiskPlanningStrategy'=>'जोखिम रणनीति की योजना बना',
    'AddNewRiskPlanningStrategyNamed'=>'नए जोखिम रणनीति नामक योजना जोड़ें',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'वर्तमान जोखिम रणनीति नामक योजना हटाएँ',
    'CloseReason'=>'कारण बंद करें',
    'AddNewCloseReasonNamed'=>'नए बंद कारण नाम जोड़ें',
    'DeleteCurrentCloseReasonNamed'=>'वर्तमान बंद कारण नाम हटाएँ',
    'IWantToReviewHighRiskEvery'=>'मैं उच्च जोखिम की समीक्षा करने के लिए चाहते हैं हर',
    'IWantToReviewMediumRiskEvery'=>'मैं मध्यम जोखिम की समीक्षा करने के लिए चाहते हैं हर',
    'IWantToReviewLowRiskEvery'=>'मैं कम जोखिम की समीक्षा करने के लिए चाहते हैं हर',
    'days'=>'दिन',
    'MyClassicRiskFormulaIs'=>'मेरे क्लासिक जोखिम सूत्र है',
    'RISK'=>'जोखिम',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'मैं इससे अधिक कुछ भी किया जा करने के लिए उच्च जोखिम पर विचार',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'मैं इसके बाद के संस्करण की तुलना, कम किया जा करने के लिए मध्यम जोखिम से लेकिन बड़ा विचार',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'मैं इसके बाद के संस्करण की तुलना, कम किया जा करने के लिए कम जोखिम से लेकिन बड़ा विचार',
    'HighRisk'=>'उच्च जोखिम',
    'MediumRisk'=>'मध्यम जोखिम',
    'LowRisk'=>'कम जोखिम',
    'Irrelevant'=>'अप्रासंगिक',
    'SubmitYourRisks'=>'अपने जोखिम प्रस्तुत',
    'PlanYourMitigations'=>'अपने Mitigations योजना',
    'PerformManagementReviews'=>'प्रबंधन की समीक्षा प्रदर्शन करना',
    'PrioritizeForProjectPlanning'=>'परियोजना योजना बनाने के लिए प्राथमिकता तय करें',
    'ReviewRisksRegularly'=>'नियमित रूप से जोखिम की समीक्षा करें',
    'DocumentANewRisk'=>'दस्तावेज़ एक नए जोखिम',
    'UseThisFormHelp'=>'जोखिम प्रबंधन की प्रक्रिया में विचार के लिए एक नया खतरा दस्तावेज़ करने के लिए इस प्रपत्र का उपयोग करें',
    'Subject'=>'विषय',
    'ExternalReferenceId'=>'बाहरी संदर्भ ID',
    'ControlNumber'=>'नियंत्रण संख्या',
    'Owner'=>'स्वामी',
    'OwnersManager'=>'मालिक की प्रबंधक',
    'RiskScoringMethod'=>'जोखिम स्कोरिंग विधि',
    'CurrentLikelihood'=>'वर्तमान संभावना',
    'CurrentImpact'=>'वर्तमान प्रभाव',
    'RiskAssessment'=>'जोखिम मूल्यांकन',
    'AdditionalNotes'=>'अतिरिक्त नोट्स',
    'UNREVIEWED'=>'विरोधों',
    'PASTDUE'=>'अतीत के कारण',
    'ID'=>'ID',
    'Status'=>'स्थिति',
    'Risk'=>'जोखिम',
    'DaysOpen'=>'खुला दिन',
    'CalculatedRisk'=>'जोखिम की गणना',
    'SubmittedBy'=>'द्वारा प्रस्तुत',
    'NextReviewDate'=>'अगली समीक्षा दिनांक',
    'CVSSRiskScoring'=>'CVSS जोखिम स्कोरिंग',
    'DREADRiskScoring'=>'भय जोखिम स्कोरिंग',
    'OWASPRiskScoring'=>'OWASP जोखिम स्कोरिंग',
    'CustomRiskScoring'=>'कस्टम जोखिम स्कोरिंग',
    'MitigationPlanningHelp'=>'सबमिट किए गए जोखिम शमन योजना बनाने की आवश्यकता की सूची नीचे है',
    'ManagementReviewHelp'=>'सबमिट किए गए जोखिम है कि एक प्रबंधन की समीक्षा की आवश्यकता की सूची नीचे है',
    'Submitted'=>'पेश की हैं:',
    'MitigationPlanned'=>'योजना बनाई शमन',
    'ManagementReview'=>'प्रबंधन की समीक्षा',
    'No'=>'नहीं',
    'Yes'=>'हाँ',
    'AddAndRemoveProjects'=>'जोड़ें और परियोजनाओं को निकालें',
    'AddAndRemoveProjectsHelp'=>'जोड़ें और परियोजनाओं के प्राथमिकीकरण के लिए एक साथ कई जोखिम को संबद्ध करने के लिए निकालें',
    'AddNewProjectNamed'=>'नया प्रोजेक्ट नाम जोड़ें',
    'DeleteCurrentProjectNamed'=>'वर्तमान प्रोजेक्ट नाम हटाएँ',
    'AddUnassignedRisksToProjects'=>'अनअसाइन्ड जोखिम प्रोजेक्ट्स के लिए जोड़',
    'AddUnassignedRisksToProjectsHelp'=>'खींचें और ड्रॉप अनअसाइन्ड जोखिम उचित प्रोजेक्ट टैब में एक परियोजना के रूप में विचार के लिए चिह्नित',
    'PrioritizeProjects'=>'परियोजनाओं को प्राथमिकता',
    'PrioritizeProjectsHelp'=>'परियोजनाओं के चारों ओर ले जाने और प्राथमिकीकरण का क्रम बदलें।  एक बार समाप्त, अपने परिवर्तनों को सहेजने के लिए "अद्यतन" बटन दबाएँ करने के लिए मत भूलना',
    'SaveRisksToProjects'=>'परियोजनाओं के लिए जोखिम सहेजें',
    'RiskId'=>'जोखिम ID',
    'RiskActions'=>'जोखिम कार्यों',
    'ReopenRisk'=>'जोखिम से खोलें',
    'CloseRisk'=>'जोखिम को बंद करें',
    'EditRisk'=>'जोखिम को संपादित करें',
    'PlanAMitigation'=>'एक शमन योजना',
    'PerformAReview'=>'प्रदर्शन की समीक्षा',
    'AddAComment'=>'एक टिप्पणी जोड़ें',
    'ShowRiskScoringDetails'=>'जोखिम स्कोरिंग विवरण दिखाएँ',
    'HideRiskScoringDetails'=>'जोखिम स्कोरिंग विवरण छुपाएँ',
    'Details'=>'विवरण',
    'SubmissionDate'=>'सबमिट करने का दिनांक',
    'DateSubmitted'=>'सबमिट करने का दिनांक',
    'EditDetails'=>'विवरण संपादित करें',
    'Mitigation'=>'शमन',
    'MitigationDate'=>'शमन दिनांक',
    'PlanningStrategy'=>'रणनीति योजना',
    'CurrentSolution'=>'वर्तमान समाधान',
    'SecurityRequirements'=>'सुरक्षा आवश्यकताएँ',
    'SecurityRecommendations'=>'सुरक्षा अनुशंसाएँ',
    'EditMitigation'=>'शमन संपादित करें',
    'LastReview'=>'अंतिम समीक्षा',
    'ReviewDate'=>'समीक्षा तिथि',
    'Reviewer'=>'समीक्षक',
    'Review'=>'समीक्षा',
    'NextStep'=>'अगले चरण',
    'Comments'=>'टिप्पणियाँ',
    'ViewAllReviews'=>'सभी समीक्षाएं देखें',
    'ReviewHistory'=>'इतिहास की समीक्षा करें',
    'Comment'=>'टिप्पणी',
    'ClassicRiskScoring'=>'क्लासिक जोखिम स्कोरिंग',
    'RiskScoringActions'=>'जोखिम स्कोरिंग क्रियाएँ',
    'UpdateClassicScore'=>'क्लासिक स्कोर अद्यतन',
    'ScoreBy'=>'द्वारा कुल',
    'RISKClassicExp1'=>'जोखिम (संभावना प्रभाव + 2(Impact)) =',
    'RISKClassicExp2'=>'जोखिम (संभावना प्रभाव + प्रभाव x) =',
    'RISKClassicExp3'=>'जोखिम = (संभावना प्रभाव x)',
    'RISKClassicExp4'=>'जोखिम (x प्रभाव + संभावना संभावना) =',
    'RISKClassicExp5'=>'जोखिम (संभावना प्रभाव + 2(Likelihood)) =',
    'Reason'=>'कारण',
    'CloseOutInformation'=>'बंद बाहर जानकारी',
    'SubmitManagementReview'=>'प्रबंधन समीक्षा जमा करें',
    'SubmitRiskMitigation'=>'जोखिम शमन सबमिट करें',
    'RiskDashboard'=>'जोखिम डैशबोर्ड',
    'RiskTrend'=>'जोखिम की प्रवृत्ति',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'सभी खुले जोखिम मुझे करने के लिए जोखिम स्तर द्वारा असाइन किया गया',
    'AllOpenRisksByRiskLevel'=>'सभी खुले जोखिम जोखिम स्तर द्वारा',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'सभी खुले जोखिम जोखिम स्तर द्वारा परियोजनाओं के लिए विचार',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'सभी खुले जोखिम अगली समीक्षा तक जोखिम स्तर द्वारा स्वीकार किए जाते हैं',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'सभी खुले जोखिम जोखिम स्तर द्वारा किसी उत्पादन समस्या के रूप में प्रस्तुत करने के लिए',
    'AllOpenRisksByScoringMethod'=>'सभी खुले जोखिम स्कोरिंग विधि द्वारा',
    'AllClosedRisksByRiskLevel'=>'सभी बंद जोखिम जोखिम स्तर द्वारा',
    'SubmittedRisksByDate'=>'दिनांक द्वारा सबमिट किए गए जोखिम',
    'MitigationsByDate'=>'दिनांक द्वारा mitigations',
    'ManagementReviewsByDate'=>'दिनांक के आधार पर प्रबंधन समीक्षा',
    'ProjectsAndRisksAssigned'=>'प्रोजेक्ट्स और असाइन किए गए जोखिम',
    'OpenRisks'=>'खुला जोखिम',
    'ClosedRisks'=>'बंद जोखिम',
    'ReportMyOpenHelp'=>'इस रिपोर्ट से पता चलता है कि स्वामी के रूप में वर्तमान उपयोगकर्ता के पास सभी खुले जोखिम या प्रबंधक के जोखिम के साथ जुड़े जोखिम के स्तर द्वारा आदेश दिया',
    'ReportOpenHelp'=>'इस रिपोर्ट से पता चलता है सभी खुले जोखिम जोखिम स्तर द्वारा आदेश दिया',
    'ReportProjectsHelp'=>'इस रिपोर्ट से पता चलता है सभी खुले जोखिम माना जाता जोखिम के स्तर द्वारा आदेश दिया परियोजनाओं के लिए',
    'ReportNextReviewHelp'=>'इस रिपोर्ट से पता चलता है सभी खुले जोखिम जोखिम स्तर द्वारा आदेश दिया अगली समीक्षा तक स्वीकार किए जाते हैं',
    'ReportProductionIssuesHelp'=>'सभी खुले जोखिम जोखिम स्तर द्वारा आदेश दिया उत्पादन मुद्दों के रूप में प्रस्तुत इस रिपोर्ट से पता चलता है',
    'ReportRiskScoringHelp'=>'इस रिपोर्ट से पता चलता है सभी विधियों स्कोरिंग जोखिम और जोखिम का उपयोग कर प्रत्येक रन बनाए',
    'ReportClosedHelp'=>'इस रिपोर्ट से पता चलता है सभी बंद जोखिम जोखिम स्तर द्वारा आदेश दिया',
    'ReportSubmittedByDateHelp'=>'इस रिपोर्ट से पता चलता है सभी जोखिम द्वारा प्रस्तुत करने की तारीख का आदेश दिया',
    'ReportMitigationsByDateHelp'=>'इस रिपोर्ट से पता चलता है सभी mitigations योजना बनाई शमन दिनांक द्वारा का आदेश दिया',
    'ReportMgmtReviewsByDateHelp'=>'इस रिपोर्ट से पता चलता है सभी प्रबंधन समीक्षा समीक्षा दिनांक द्वारा आदेश दिया',
    'ReportProjectsAndRisksHelp'=>'इस रिपोर्ट से पता चलता है सभी परियोजनाओं और जोखिम के लिए इन्हें असाइन किया गया',
    'Language'=>'भाषा',
    'AllOpenRisksNeedingReview'=>'सभी खुले जोखिमों की समीक्षा की जरूरत',
    'ReportReviewNeededHelp'=>'सभी खुले जोखिम प्रबंधन की समीक्षा की जरूरत इस रिपोर्ट से पता चलता है',
    'CustomValue'=>'कस्टम मान',
    'ClosedRisksByDate'=>'दिनांक द्वारा बंद जोखिम',
    'DateClosed'=>'बंद दिनांक',
    'ClosedBy'=>'द्वारा बंद कर दिया',
    'ReportClosedByDateHelp'=>'इस रिपोर्ट से पता चलता है सभी जोखिम द्वारा बंद करने की तारीख का आदेश दिया',
    'AllOpenRisksByTeam'=>'टीम द्वारा सभी खुले जोखिम',
    'ReportRiskTeamsHelp'=>'इस रिपोर्ट से पता चलता है सभी टीमों और जोखिमों में से प्रत्येक के लिए असाइन किया गया',
    'Unassigned'=>'असाइन नहीं की गई',
    'AllOpenRisksByTechnology'=>'सभी खुले जोखिम प्रौद्योगिकी द्वारा',
    'ReportRiskTechnologiesHelp'=>'इस रिपोर्ट से पता चलता है सभी प्रौद्योगिकियों और जोखिमों में से प्रत्येक के लिए असाइन किया गया',
    'RiskLevel'=>'जोखिम स्तर',
    'BasedOnTheCurrentRiskScore'=>'वर्तमान जोखिम स्कोर पर आधारित, अगली समीक्षा दिनांक हो जाएगा ',
    'WouldYouLikeToUseADifferentDate'=>'आप कोई भिन्न दिनांक इसके बजाय का उपयोग करना चाहेंगे?',
    'RisksOpenedAndClosedOverTime'=>'जोखिम खोला गया और समय के साथ बंद',
    'AllRiskScoresAreAdjusted'=>'सभी जोखिम स्कोर एक 0-10 के पैमाने पर फिट करने के लिए समायोजित कर रहे हैं।',
    'DetermineProjectStatus'=>'परियोजना की स्थिति का निर्धारण',
    'ProjectStatusHelp'=>'परियोजनाओं में बाल्टी उनके वर्तमान स्थिति के आधार पर जगह है।',
    'ActiveProjects'=>'सक्रिय परियोजनाएं',
    'OnHoldProjects'=>'होल्ड पर परियोजनाओं',
    'CompletedProjects'=>'पूर्ण परियोजनाएँ।',
    'CancelledProjects'=>'रद्द परियोजनाओं',
    'UpdateProjectStatuses'=>'परियोजना स्थितियों को अपडेट',
    'HighRiskReport'=>'उच्च जोखिम रिपोर्ट',
    'TotalOpenRisks'=>'कुल खुला जोखिम',
    'TotalHighRisks'=>'कुल उच्च जोखिम',
    'HighRiskPercentage'=>'उच्च जोखिम प्रतिशत',
    'UpdateClassicScore'=>'क्लासिक स्कोर अद्यतन',
    'CurrentLikelihood'=>'वर्तमान संभावना',
    'CurrentImpact'=>'वर्तमान प्रभाव',   
    'UpdateCVSSScore'=>'CVSS स्कोर अद्यतन',
    'BaseScoreMetrics'=>'स्कोर मेट्रिक्स के आधार',
    'AttackVector'=>'आक्रमण वेक्टर',
    'AttackComplexity'=>'हमले जटिलता',
    'Authentication'=>'प्रमाणीकरण',
    'ConfidentialityImpact'=>'गोपनीयता प्रभाव',
    'IntegrityImpact'=>'अखंडता प्रभाव',
    'AvailabilityImpact'=>'उपलब्धता प्रभाव',
    'TemporalScoreMetrics'=>'लौकिक कुल मेट्रिक्स',
    'Exploitability'=>'Exploitability',
    'RemediationLevel'=>'रिमेडियेशन स्तर',
    'ReportConfidence'=>'रिपोर्ट विश्वास',
    'EnvironmentalScoreMetrics'=>'पर्यावरण कुल मेट्रिक्स',
    'CollateralDamagePotential'=>'संपार्श्विक क्षति के संभावित',
    'TargetDistribution'=>'लक्ष्य वितरण',
    'ConfidentialityRequirement'=>'गोपनीयता की आवश्यकता',
    'IntegrityRequirement'=>'अखंडता की आवश्यकता',
    'AvailabilityRequirement'=>'उपलब्धता की आवश्यकता',
    'UpdateDREADScore'=>'खूंखार स्कोर अद्यतन',
    'DamagePotential'=>'नुकसान की क्षमता',
    'Reproducibility'=>'Reproducibility की',
    'AffectedUsers'=>'प्रभावित उपयोगकर्ताओं',
    'Discoverability'=>'Discoverability',
    'UpdateOWASPScore'=>'OWASP स्कोर अद्यतन',
    'ThreatAgentFactors'=>'खतरा एजेंट कारक',
    'SkillLevel'=>'कौशल स्तर',
    'Motive'=>'मकसद',
    'Opportunity'=>'अवसर',
    'Size'=>'आकार',
    'VulnerabilityFactors'=>'जोखिम कारक',
    'EaseOfDiscovery'=>'डिस्कवरी की सुगमता',
    'EaseOfExploit'=>'शोषण में आसानी',
    'Awareness'=>'जागरूकता',
    'IntrusionDetection'=>'घुसपैठ का पता लगाने',
    'TechnicalImpact'=>'तकनीकी प्रभाव',
    'LossOfConfidentiality'=>'गोपनीयता की हानि',
    'LossOfIntegrity'=>'अखंडता की हानि',
    'LossOfAvailability'=>'उपलब्धता की हानि',
    'LossOfAccountability'=>'जवाबदेही का नुकसान',
    'BusinessImpact'=>'व्यावसायिक प्रभाव',
    'FinancialDamage'=>'वित्तीय क्षति',
    'ReputationDamage'=>'प्रतिष्ठा नुकसान',
    'NonCompliance'=>'गैर-अनुपालन',
    'PrivacyViolation'=>'निजता का उल् लंघन',
    'UpdateCustomScore'=>'कस्टम स्कोर अद्यतन',
    'ManuallyEnteredValue'=>'मैन्युअल रूप से दर्ज किए गए मान',
    'ScoreByClassic'=>'क्लासिक द्वारा स्कोर',
    'ScoreByCVSS'=>'CVSS द्वारा स्कोर',
    'ScoreByDREAD'=>'खूंखार द्वारा स्कोर',
    'ScoreByOWASP'=>'OWASP द्वारा स्कोर',
    'ScoreByCustom'=>'कस्टम द्वारा स्कोर',
    'BaseVector'=>'आधार सदिश',
    'TemporalVector'=>'लौकिक वेक्टर',
    'EnvironmentalVector'=>'पर्यावरण वेक्टर',
    'SupportingDocumentation'=>'प्रलेखन का समर्थन',
    'Import'=>'आयात',
    'Export'=>'निर्यात करें',
    'ActivateTheImportExportExtra'=>'आयात/निर्यात को सक्रिय अतिरिक्त',
    'PrintableView'=>'मुद्रण योग्य दृश्य',
    'GroupBy'=>'आधार पर समूहीकृत करें',
    'IncludedColumns'=>'शामिल स्तंभ',
    'AllRisks'=>'सभी जोखिम',
    'DynamicRiskReport'=>'गतिशील जोखिम रिपोर्ट',
    'ObsoleteReports'=>'अप्रचलित रिपोर्ट',
    'Project'=>'परियोजना',
    'SortBy'=>'द्वारा सॉर्ट करें',
    'MonthSubmitted'=>'माह पेश की हैं:',
    'AssetManagement'=>'परिसंपत्ति प्रबंधन',
    'AutomatedDiscovery'=>'स्वचालित खोज',
    'BatchImport'=>'बैच आयात',
    'ManageAssets'=>'परिसंपत्तियों का प्रबंधन',
    'AssetValuation'=>'परिसम्पत्तियों का मूल्य निर्धारण',
    'AllowAccessToAssetManagementMenu'=>'"परिसंपत्ति प्रबंधन" मेनू करने के लिए पहुँच की अनुमति दें',
    'AutomatedDiscoveryHelp'=>'सभी लाइव IP पते दर्ज किए गए IP श्रेणी में पता चलता है।  लाइव IP पते परिसंपत्ति सूची करने के लिए जोड़ दिया जाएगा।  स्वीकार्य स्वरूपों:',
    'IPRange'=>'IP श्रेणी',
    'Search'=>'खोज',
    'AddANewAsset'=>'एक नया संपत्ति जोड़ें',
    'DeleteAnExistingAsset'=>'एक मौजूदा परिसंपत्ति हटाएँ',
    'AssetName'=>'परिसंपत्ति नाम',
    'IPAddress'=>'IP पता',
    'AssetWasAddedSuccessfully'=>'परिसंपत्ति सफलतापूर्वक जोड़ा गया था।',
    'AssetWasDeletedSuccessfully'=>'परिसंपत्ति सफलतापूर्वक हटा दिया गया था।',
    'ThereWasAProblemAddingTheAsset'=>'संपत्ति जोड़ने में कोई समस्या थी।',
    'ThereWasAProblemDeletingTheAsset'=>'संपत्ति को हटाने में कोई समस्या थी।',
    'ComingSoon'=>'जल्दी ही आगमन',
    'ExportRisks'=>'जोखिम निर्यात',
    'ExportMitigations'=>'निर्यात Mitigations',
    'ExportReviews'=>'निर्यात समीक्षाएँ',
    'ExportCombined'=>'संयुक्त निर्यात',
    'MitigatedBy'=>'द्वारा शमन',
    'MitigationId'=>'शमन ID',
    'ReviewId'=>'समीक्षा ID',
    'AffectedAssets'=>'प्रभावित संपत्ति',
    'Activate'=>'सक्रिय करें',
    'DeleteRisks'=>'जोखिम को हटाना',
    'DeletedRisksCannotBeRecovered'=>'हटाए गए जोखिम पुनर्प्राप्त नहीं किया जा सकता है',
    'RisksDeletedSuccessfully'=>'सफलतापूर्वक हटाया risk(s)',
    'ThereWasAProblemDeletingTheRisk'=>'Risk(s) को हटाने में कोई समस्या थी',
    'Activated'=>'सक्रिय',
    'IWantToReviewInsignificantRiskEvery'=>'मैं तुच्छ जोखिम की समीक्षा करने के लिए चाहते हैं हर',
    'Insignificant'=>'महत्वहीन',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'मैं इससे अधिक कुछ भी किया जा करने के लिए बहुत उच्च जोखिम पर विचार',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'मैं इसके बाद के संस्करण की तुलना, कम किया जा करने के लिए उच्च जोखिम से लेकिन बड़ा विचार',
    'VeryHigh'=>'बहुत उच्च',
    'VeryHighRisk'=>'बहुत ही उच्च जोखिम',
    'IWantToReviewVeryHighRiskEvery'=> 'मैं बहुत ही उच्च जोखिम की समीक्षा करने के लिए चाहते हैं हर',
    'AbleToReviewVeryHighRisks'=>'बहुत ही उच्च जोखिम की समीक्षा करने में सक्षम',
    'AbleToReviewInsignificantRisks'=>'तुच्छ जोखिम की समीक्षा करने में सक्षम',
    'TotalVeryHighRisks'=>'कुल बहुत उच्च जोखिम',
    'VeryHighRiskPercentage'=>'बहुत ही उच्च जोखिम प्रतिशत',
    'AllTeams'=>'सभी टीमें',
    'FileUploadSettings'=>'फ़ाइल अपलोड सेटिंग्स',
    'AllowedFileTypes'=>'फ़ाइल प्रकारों की अनुमति दी',
    'AddNewFileTypeOf'=>'के नया फ़ाइल प्रकार जोड़ें',
    'DeleteCurrentFileTypeOf'=>'के वर्तमान फ़ाइल प्रकार हटाएँ',
    'MaximumUploadFileSize'=>'अधिकतम अपलोड फ़ाइल आकार',
    'Bytes'=>'बाइट्स',
    'CheckAll'=>'सभी की जाँच करें',
    'CheckAllRiskMgmt'=>'सभी जोखिम प्रबंधन की जाँच करें',
    'CheckAllAssetMgmt'=>'सभी परिसंपत्ति प्रबंधन की जाँच करें',
    'CheckAllConfigure'=>'सभी कॉन्फ़िगर चेक',
    'MitigationTeam'=>'शमन दल',
    'ImportRisks'=>'आयात जोखिम',
    'ImportAssets'=>'आस्तियों आयात करें',
    'AssetValue'=>'परिसंपत्ति मूल्य',
    'Register'=>'पंजीकृत करें',
    'RegisterSimpleRisk'=>'SimpleRisk रजिस्टर',
    'RegistrationText'=>'ताकि आप नवीनतम रिलीज जानकारी और महत्वपूर्ण सुरक्षा सूचनाओं के साथ अद्यतन किया जा सकता SimpleRisk पंजीकृत करके आप अपनी संपर्क जानकारी प्रदान किया जाएगा।  एक तृतीय-पक्ष के लिए आपकी जानकारी कभी नहीं बेचा जाएगा।  पंजीकृत मामलों भी बैकअप लिया और एक बटन के क्लिक के साथ उन्नत किया जा करने के लिए की क्षमता है।',
    'RegistrationInformation'=>'पंजीकरण जानकारी',
    'Company'=>'कंपनी',
    'JobTitle'=>'कार्य शीर्षक',
    'Phone'=>'फोन',
    'UpgradeSimpleRisk'=>'SimpleRisk नवीनीकरण',
    'UpgradeInstructions'=>'यह अनुभाग नवीनीकरण अतिरिक्त का उपयोग करता है।  सुनिश्चित करें कि आपके पास नवीनतम संस्करण के लिए, "अद्यतन करें" का चयन करें, पुन: पंजीकृत करें, और इस पृष्ठ को रीलोड करें।',
    'NoUpgradeNeeded'=>'इस समय कोई उन्नयन की जरूरत है।',
    'BackupDatabase'=>'डेटाबेस का बैकअप लेना',
    'UpgradeApplication'=>'अनुप्रयोग का नवीनीकरण',
    'UpgradeDatabase'=>'डेटाबेस नवीनीकरण',
    'CustomExtras'=>'कस्टम एक्स्ट्रा कलाकार',
    'CustomExtrasText'=>'अगर सब कुछ थे, नि: शुल्क है ना यह भयानक होगा?  उम्मीद है कि कोर SimpleRisk मंच अपनी जोखिम प्रबंधन जरूरतों के सभी की सेवा करने में सक्षम है।  लेकिन, यदि आप अपने आप अभी भी और अधिक कार्यक्षमता चाहते हैं, हम "एक्स्ट्रा कलाकार कि बस ऐसा करेगी" की एक श्रृंखला विकसित की है।',
    'Upgrade'=>'नवीनीकरण',
    'Install'=>'स्थापित करें',
    'Purchase'=>'खरीद',
    'PasswordPolicy'=>'पासवर्ड नीति',
    'MinimumNumberOfCharacters'=>'वर्णों की न्यूनतम संख्या',
    'RequireAlphaCharacter'=>'अल्फा वर्ण की आवश्यकता होती है',
    'RequireUpperCaseCharacter'=>'ऊपरी मामले चरित्र की आवश्यकता',
    'RequireLowerCaseCharacter'=>'निचले मामले वर्ण की आवश्यकता होती है',
    'RequireNumericCharacter'=>'सांख्यिक वर्ण की आवश्यकता होती है',
    'RequireSpecialCharacter'=>'विशेष वर्ण की आवश्यकता होती है',
    'Enabled'=>'सक्षम किया गया',
    'RiskPyramid'=>'जोखिम पिरामिड',
    'RiskPyramidDescription'=>'जोखिम ऊपर पिरामिड जोखिम के वितरण के बीच विभिन्न जोखिम स्तर दिखाने के लिए मदद करता है।  एक भारी शीर्ष पिरामिड एक संकेत है कि अपने संगठन बहुत अधिक जोखिम पर ले जा रहा है हो सकता है।',
    'RiskAdvice'=>'जोखिम सलाह',
    'AddDeleteAssets'=>'जोड़ें & परिसंपत्तियों को हटाएँ',
    'EditAssets'=>'आस्तियों को संपादित करें',
    'AutomaticAssetValuation'=>'स्वत: परिसम्पत्तियों का मूल्य निर्धारण',
    'ManualAssetValuation'=>'मैनुअल परिसम्पत्तियों का मूल्य निर्धारण',
    'MinimumValue'=>'न्यूनतम मान',
    'MaximumValue'=>'अधिकतम मान',
    'ValueRange'=>'मान श्रेणी',
    'DefaultAssetValuation'=>'डिफ़ॉल्ट परिसम्पत्तियों का मूल्य निर्धारण',
    'Default'=>'डिफ़ॉल्ट',
    'RisksAndAssets'=>'जोखिम और संपत्ति',
    'Report'=>'रिपोर्ट',
    'RisksByAsset'=>'परिसंपत्ति द्वारा जोखिम',
    'AssetsByRisk'=>'संपत्ति जोखिम द्वारा',
    'MaximumQuantitativeLoss'=>'अधिकतम मात्रात्मक हानि',
    'MitigationOwner'=>'शमन स्वामी',
    'MitigationCost'=>'शमन लागत',
    'RiskColumns'=>'जोखिम कॉलम',
    'MitigationColumns'=>'शमन कॉलम',
    'ReviewColumns'=>'समीक्षा कॉलम',
    'ChangeStatus'=>'स्थिति बदलें',
    'SetRiskStatusTo'=>'करने के लिए सेट करें जोखिम की स्थिति',
    'AddNewStatusNamed'=>'नई स्थिति के नाम जोड़ने',
    'DeleteStatusNamed'=>'स्थिति नाम हटाएँ',
    'DefaultCurrencySymbol'=>'डिफ़ॉल्ट मुद्रा प्रतीक',
    'DefaultValues'=>'डिफ़ॉल्ट मान',
    'RiskSource'=>'जोखिम स्रोत',
    'AddNewSourceNamed'=>'नया स्रोत नाम जोड़ें',
    'DeleteSourceNamed'=>'स्रोत नाम हटाएँ',
    'CheckAllAssessments'=>'सभी आकलन की जाँच करें',
    'AllowAccessToAssessmentsMenu'=>'"मूल्यांकन" मेनू करने के लिए पहुँच की अनुमति दें',
    'Assessments'=>'आकलन',
    'AvailableAssessments'=>'उपलब्ध मूल्यांकन',
    'PendingRisks'=>'लंबित जोखिम',
    'CreateAssessment'=>'आकलन बनाएँ',
    'EditAssessment'=>'मूल्यांकन संपादित करें',
    'Overview'=>'संक्षिप्त अवलोकन',
    'OpenVsClosed'=>'बंद बनाम खुला',
    'MitigatedVsUnmitigated'=>'शमन बनाम Unmitigated',
    'ReviewedVsUnreviewed'=>'समीक्षित बनाम Unreviewed',
    'OpenedRisks'=>'खोले गए जोखिम',
    'MailSettings'=>'मेल सेटिंग्स',
    'TransportAgent'=>'परिवहन एजेंट',
    'FromName'=>'नाम से',
    'FromEmail'=>'ईमेल से',
    'ReplyToName'=>'ReplyTo नाम',
    'ReplyToEmail'=>'ReplyTo ईमेल',
    'Host'=>'होस्ट',
    'SMTPAuthentication'=>'SMTP प्रमाणन',
    'Encryption'=>'एन्क्रिप्शन',
    'Port'=>'पोर्ट',
    'Next'=>'अगले',
    'NewAssessmentQuestion'=>'नए मूल्यांकन प्रश्न',
    'Question'=>'प्रश्न',
    'RiskScore'=>'जोखिम स्कोर',
    'SubmitRisk'=>'जोखिम प्रस्तुत',
    'Answer'=>'उत्तर',
    'AddQuestion'=>'प्रश्न जोड़ें',
    'SaveAssessment'=>'आकलन सहेजें',
    'SendAssessment'=>'आकलन भेजें',
    'DeleteAssessment'=>'आकलन हटाएँ',
    'AssessmentName'=>'आकलन का नाम',
    'SendTo'=>'करने के लिए भेजें',
    'ActiveAssessments'=>'सक्रिय आकलन',
    'SentTo'=>'करने के लिए भेजा',
    'From'=>'से',
    'Key'=>'कुंजी',
    'GoToSSOLoginPage'=>'एसएसओ लॉगिन पृष्ठ पर जाएं',
    'APIKey'=>'एपीआई कुंजी',
    'GenerateAPIKey'=>'एपीआई कुंजी उत्पन्न',
    'RotateAPIKey'=>'घुमाएँ एपीआई कुंजी',
    'InvalidateAPIKey'=>'एपीआई कुंजी अमान्य',
    'Deactivate'=>'निष्क्रिय करें',
    'ImportExportExtra'=>'Import-Export Extra',
    'SaveDetails'=>'बचाने के लिए विवरण',
    'ClearForm'=>'स्पष्ट प्रपत्र',
    'SaveMitigation'=>'सहेजें शमन',
    'Cancel'=>'रद्द करना',
    'SubmitReview'=>'समीक्षा जमा करें',
    'UnassignedRisks'=>'अनअसाइन्ड जोखिम',
    'DisableRegistrationNotice'=>'पंजीकरण सूचना अक्षम',
    'UserPolicy'=>'उपयोगकर्ता नीति',
    'UseCaseSensitiveValidationOfUsername'=>'प्रयोक्ता नाम का केस सेंसिटिव मान्यता का उपयोग',
    'MitigationPlanning'=>'योजना बनाई शमन दिनांक',
    'AssetDetails'=>'एसेट विवरण',
    'RiskList'=>'जोखिम सूची',
    'Are you sure you want to close the risk? All changes will be lost!'=>'आप जोखिम को बंद करना चाहते हैं आप सुनिश्चित हैं? सभी परिवर्तन गुम हो जाएगा!',
    'MinimumPasswordAge' => 'न्यूनतम पासवर्ड उम्र',
    'MaximumPasswordAge' => 'अधिकतम पासवर्ड उम्र',
    'MaximumAttemptsLockout' => 'अधिकतम प्रयास तालाबंदी',
    'MaximumAttemptsLockoutTime' => 'अधिकतम प्रयास तालाबंदी समय',
    'attempts'=>'प्रयास को',
    'minutes'=>'मिनटों',
    'AccountLockedOut'=>'खाता अवरोधित',
    'AccountLockoutPolicy'=>'खाते में तालाबंदी की नीति',
    'ImportExportIsDeactivated' => 'Import-export is deactivated',
    'PurchaseTheExtra' => 'Purchase the Extra',
    'ExpandAll' => 'Expand All',
    'ConditionMessageForMinChar' => 'Password should contain the minimum of $min_chars characters.',
    'ConditionMessageForAlpha' => 'Password should contain an alpha character.',
    'ConditionMessageForUppercase' => 'Password should contain an uppercase character.',
    'ConditionMessageForLowercase' => 'Password should contain a lowercase character.',
    'ConditionMessageForDigit' => 'Password should contain a digit.',
    'ConditionMessageForSpecialchar' => 'Password should contain a special character.',
    'ConditionMessageForMinPasswordAge' => 'Password can be updated from last updated time the minimum of $min_password_age days later .',
    'TrustedDomains' => 'Trusted Domains',
    'SimpleRiskColumnMapping' => 'SimpleRisk Column Mapping',
    'Mapping' => 'Mapping',
    'Optional' => 'Optional',
    'SaveMappingAs' => 'Save Mapping As',
    'EncryptionLevel' => 'Encryption Level',
    'Level' => 'Level',
    'Description' => 'Description',
    'ShowRiskScoreOverTime' => 'Show Risk Score Over Time',
    'HideRiskScoreOverTime' => 'Hide Risk Score Over Time',
    'ReviewRegularlyHelp' => 'Below is the list of all risks sorted by Unreviewed, Past Due, and Next Review Date',
    'RiskScoringHistory' => 'Risk Scoring History',
    'RiskAddPermissionMessage' => 'You do not have permission to submit new risks.  Any risks that you attempt to submit will not be recorded.  Please contact an Administrator if you feel that you have reached this message in error.',
    'SubjectRiskCannotBeEmpty' => 'The subject of a risk cannot be empty',
    'InvalidRiskID' => 'Invalid Risk ID',
    'Success' => 'Success',
    'RiskUpdatePermissionMessage' => 'You do not have permission to modify risks.  Any risks that you attempt to modify will not be recorded.  Please contact an Administrator if you feel that you have reached this message in error.',
    'RiskReviewPermission' => 'You do not have permission to review $risk_level level risks.  Any reviews that you attempt to submit will not be recorded.  Please contact an administrator if you feel that you have reached this message in error.',
    ''=>'',
);

?>
