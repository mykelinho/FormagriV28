<?php
  // Written by: Brian Moon
  // Phorum Version: 3.2.2

  $lForumDown       = ""; // Our forums are down";
  $lForumDownNotice = ""; // Our Forum is currently down for maintenance.  It will be available again shortly.<p>We are sorry for the inconvenience.";
  $lNoAuthor        = ""; // You must supply an author.";
  $lNoSubject       = ""; // You must supply a subject.";
  $lNoBody          = ""; // You must supply a message.";
  $lNoEmail         = ""; // You did not enter a valid email address.  An email address is not required.<br>If you do not wish to leave your email address please leave the field blank.";
  $lNoEmailReply    = ""; // When requesting to be emailed replies, you must supply a valid email address.";
  $lModerated       = ""; // Moderated forum.  All posts are reviewed before posting.";
  $lModeratedMsg    = ""; // This is a moderated forum.  Your post has been emailed to the moderator and will be reviewed as soon as possible.";
  $lReplyMessage    = ""; // Reply To This Message";
  $lReplyThread     = ""; // Reply To This Topic";
  $lWrote           = ""; // wrote";
  $lQuote           = ""; // Quote";
  $lFormName        = ""; // Your Name";
  $lFormEmail       = ""; // Your Email";
  $lFormSubject     = ""; // Subject";
  $lFormAttachment  = ""; // Attachment";
  $lInvalidFile     = ""; // The attachment cannot contain spaces or weird characters.";
  $lFileExists      = ""; // The file of this name has already been uploaded. Please rename your attachment and try again.";
  $lFormPost        = ""; // Post";
  $lFormImage       = ""; // Image";
  $lAvailableForums = ""; // Available Forums";
  $lNoActiveForums  = ""; // There are no active forums.";
  $lCollapseThreads = ""; // Collapse Threads";
  $lViewThreads     = ""; // View Threads";
  $lReadFlat        = ""; // Flat View";
  $lReadThreads     = ""; // Threaded View";
  $lForumList       = ""; // Forum List";
  $lMarkRead        = ""; // Mark All Read";
  $lUpLevel         = ""; // Up One Level";
  $lGoToTop         = ""; // Go to Top";
  $lStartTopic      = ""; // New Topic";
  $lSearch          = ""; // Search";
  $lSearchAllWords  = ""; // All Words";
  $lSearchAnyWords  = ""; // Any Word";
  $lSearchPhrase    = ""; // Exact Phrase";
  $lSearchLast30    = ""; // Last 30 Days";
  $lSearchLast60    = ""; // Last 60 Days";
  $lSearchLast90    = ""; // Last 90 Days";
  $lSearchLast180   = ""; // Last 180 Days";
  $lSearchAllDates  = ""; // All Dates";
  $lSearchThisForum = ""; // Search This Forum";
  $lSearchAllForums = ""; // Search All Forums";
  $lForum           = ""; // forum";
  $lBigForum        = ""; // Forum";
  $lNewerMessages   = ""; // Newer Messages";
  $lOlderMessages   = ""; // Older Messages";
  $lNew             = ""; // new";
  $lTopics          = ""; // Topics";
  $lAuthor          = ""; // Author";
  $lDate            = ""; // Date";
  $lLatest          = ""; // Latest Reply";
  $lReplies         = ""; // Replies";
  $lGoToTopic       = ""; // Go to Topic";
  $lPreviousMessage = ""; // Previous Message";
  $lNextMessage     = ""; // Next Message";
  $lPreviousTopic   = ""; // Newer Topic";
  $lNextTopic       = ""; // Older Topic";
  $lSearchResults   = ""; // Search Results";
  $lSearchTips      = ""; // Search Tips";
  $lTheSearchTips   = ""; // AND is the default. That is, a search for <B>dog</B> and <B>cat</B> returns all messages that contain those words anywhere.<p>QUOTES (\") allow searches for phrases. That is, a search for <B>\"dog cat\"</B> returns all messages that contain that exact phrase, with space.<p>MINUS (-) eliminates words. That is, a seach for <B>dog</B> and <B>-cat</B> returns all messages that contain <b>dog</b> but not <b>cat</b>. You can MINUS a phrase in QUOTES, like <B>dog -\"siamese cat\"</B>.<p>The engine is not case-sensitive and searches the title, body, and author.";
  $lNoMatches       = ""; // No matches found :(";
  $lMessageBodies   = ""; // Message Bodies (slower)";
  $lMoreMatches     = ""; // More Matches";
  $lPrevMatches     = ""; // Previous Matches";
  $lLastPostDate    = ""; // Last Post";
  $lNumPosts        = ""; // Posts";
  $lForumFolder     = ""; // Forum Folder";
  $lEmailMe         = ""; // Email replies to this thread, to the address above.";
  $lEmailAlert      = ""; // You must enter a valid e-mail address if you want replies emailed to you.";
  $lViolationTitle  = ""; // Sorry...";
  $lViolation       = ""; // Posting is not available because of your IP Address, the name you entered, or the email you entered.  This may not be because of you.  Try another name and/or email.  If you still cannot post, contact <a href=\"mailto:$ForumModEmail\">$ForumModEmail</a> for an explanation.";
  $lNotFound        = ""; // The message you requested could not be found.  For assistance contact <a href=\"mailto:$ForumModEmail\">$ForumModEmail</a>";

// This function takes a date string in the ANSI format
// (YYYY-MM-DD HH:MM:SS) and formats it for display.
// The default is for US English, MM-DD-YY HH:MM.
// See http://www.php.net/manual/function.date.php
// for options on the date() formatting function.
// The $tzoffset variable is number of hours your display
// time will be offset from the server's local timezone.
// Negative values are legal, but fractions/decimals are not.

  function dateFormat($datestamp){
    $tzoffset = 0;
    if ($datestamp == "0000-00-00") {
      $datestamp = "0000-00-00 00:00:00";
    }
    list($date,$time) = explode(" ",$datestamp);
    list($year,$month,$day) = explode("-",$date);
    list($hour,$minute,$second) = explode(":",$time);
    $hour = $hour + $tzoffset;
    $tstamp = mktime($hour,$minute,$second,$month,$day,$year);
    $sDate = date("m-d-y H:i",$tstamp);
    return $sDate;
  }

?>