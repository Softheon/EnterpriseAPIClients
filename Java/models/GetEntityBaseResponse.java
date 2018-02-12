/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package softheon.enterprise.api.client.models;

import org.joda.time.DateTime;
import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * The summary model that is sent in response to a GET request for Entity.
 */
public class GetEntityBaseResponse {
    /**
     * Gets or sets the entity identifier.
     */
    @JsonProperty(value = "ID")
    private Integer id;

    /**
     * Gets or sets the drawer identifier.
     */
    @JsonProperty(value = "DrawerID")
    private Integer drawerID;

    /**
     * Gets or sets the access control list.
     */
    @JsonProperty(value = "Acl")
    private Integer acl;

    /**
     * Gets or sets the type.
     */
    @JsonProperty(value = "Type")
    private Integer type;

    /**
     * Gets or sets the subtype.
     */
    @JsonProperty(value = "Subtype")
    private Integer subtype;

    /**
     * Gets or sets the age.
     */
    @JsonProperty(value = "Age")
    private Integer age;

    /**
     * Gets or sets the reference identifier.
     */
    @JsonProperty(value = "ReferenceCount")
    private Integer referenceCount;

    /**
     * Gets or sets the access count.
     */
    @JsonProperty(value = "AccessCount")
    private Integer accessCount;

    /**
     * Gets or sets the profile count.
     */
    @JsonProperty(value = "ProfileCount")
    private Integer profileCount;

    /**
     * Gets or sets the attach count.
     */
    @JsonProperty(value = "AttachCount")
    private Integer attachCount;

    /**
     * Gets or sets the note count.
     */
    @JsonProperty(value = "NoteCount")
    private Integer noteCount;

    /**
     * Gets or sets the owner user identifier.
     */
    @JsonProperty(value = "OwnerUserID")
    private Integer ownerUserID;

    /**
     * Gets or sets the full name of the owner user.
     */
    @JsonProperty(value = "OwnerUserFullName")
    private String ownerUserFullName;

    /**
     * Gets or sets the owner group identifier.
     */
    @JsonProperty(value = "OwnerGroupID")
    private Integer ownerGroupID;

    /**
     * Gets or sets the name of the owner group.
     */
    @JsonProperty(value = "OwnerGroupName")
    private String ownerGroupName;

    /**
     * Gets or sets the creator user identifier.
     */
    @JsonProperty(value = "CreatorUserID")
    private Integer creatorUserID;

    /**
     * Gets or sets the full name of the creator user.
     */
    @JsonProperty(value = "CreatorUserFullName")
    private String creatorUserFullName;

    /**
     * Gets or sets the creator group identifier.
     */
    @JsonProperty(value = "CreatorGroupID")
    private Integer creatorGroupID;

    /**
     * Gets or sets the name of the creator group.
     */
    @JsonProperty(value = "CreatorGroupName")
    private String creatorGroupName;

    /**
     * Gets or sets the modifier user identifier.
     */
    @JsonProperty(value = "ModifierUserID")
    private Integer modifierUserID;

    /**
     * Gets or sets the full name of the modifier user.
     */
    @JsonProperty(value = "ModifierUserFullName")
    private String modifierUserFullName;

    /**
     * Gets or sets the modifier group identifier.
     */
    @JsonProperty(value = "ModifierGroupID")
    private Integer modifierGroupID;

    /**
     * Gets or sets the name of the modifier group.
     */
    @JsonProperty(value = "ModifierGroupName")
    private String modifierGroupName;

    /**
     * Gets or sets the creation time.
     */
    @JsonProperty(value = "CreationTime")
    private DateTime creationTime;

    /**
     * Gets or sets the modification time.
     */
    @JsonProperty(value = "ModificationTime")
    private DateTime modificationTime;

    /**
     * Gets or sets the access time.
     */
    @JsonProperty(value = "AccessTime")
    private DateTime accessTime;

    /**
     * Gets or sets the resolution time.
     */
    @JsonProperty(value = "ResolutionTime")
    private DateTime resolutionTime;

    /**
     * Gets or sets the category.
     */
    @JsonProperty(value = "Category")
    private Integer category;

    /**
     * Gets or sets the reserved int1.
     */
    @JsonProperty(value = "ReservedInt1")
    private Integer reservedInt1;

    /**
     * Gets or sets the reserved int2.
     */
    @JsonProperty(value = "ReservedInt2")
    private Integer reservedInt2;

    /**
     * Gets or sets the reserved string1.
     */
    @JsonProperty(value = "ReservedString1")
    private String reservedString1;

    /**
     * Gets or sets the state. Possible values include: 'Undefined',
     * 'Available', 'Locked', 'Suspended', 'Archived', 'Deleted', 'Canceled',
     * 'Complete', 'Reviewed', 'ReviewedSuspended', 'ReviewedComplete',
     * 'Rejected', 'RoutingSlipOpen', 'ReviewedRoutingSlipOpen'.
     */
    @JsonProperty(value = "State")
    private String state;

    /**
     * Gets or sets the name.
     */
    @JsonProperty(value = "Name")
    private String name;

    /**
     * Get the id value.
     *
     * @return the id value
     */
    public Integer id() {
        return this.id;
    }

    /**
     * Set the id value.
     *
     * @param id the id value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withId(Integer id) {
        this.id = id;
        return this;
    }

    /**
     * Get the drawerID value.
     *
     * @return the drawerID value
     */
    public Integer drawerID() {
        return this.drawerID;
    }

    /**
     * Set the drawerID value.
     *
     * @param drawerID the drawerID value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withDrawerID(Integer drawerID) {
        this.drawerID = drawerID;
        return this;
    }

    /**
     * Get the acl value.
     *
     * @return the acl value
     */
    public Integer acl() {
        return this.acl;
    }

    /**
     * Set the acl value.
     *
     * @param acl the acl value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withAcl(Integer acl) {
        this.acl = acl;
        return this;
    }

    /**
     * Get the type value.
     *
     * @return the type value
     */
    public Integer type() {
        return this.type;
    }

    /**
     * Set the type value.
     *
     * @param type the type value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withType(Integer type) {
        this.type = type;
        return this;
    }

    /**
     * Get the subtype value.
     *
     * @return the subtype value
     */
    public Integer subtype() {
        return this.subtype;
    }

    /**
     * Set the subtype value.
     *
     * @param subtype the subtype value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withSubtype(Integer subtype) {
        this.subtype = subtype;
        return this;
    }

    /**
     * Get the age value.
     *
     * @return the age value
     */
    public Integer age() {
        return this.age;
    }

    /**
     * Set the age value.
     *
     * @param age the age value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withAge(Integer age) {
        this.age = age;
        return this;
    }

    /**
     * Get the referenceCount value.
     *
     * @return the referenceCount value
     */
    public Integer referenceCount() {
        return this.referenceCount;
    }

    /**
     * Set the referenceCount value.
     *
     * @param referenceCount the referenceCount value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withReferenceCount(Integer referenceCount) {
        this.referenceCount = referenceCount;
        return this;
    }

    /**
     * Get the accessCount value.
     *
     * @return the accessCount value
     */
    public Integer accessCount() {
        return this.accessCount;
    }

    /**
     * Set the accessCount value.
     *
     * @param accessCount the accessCount value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withAccessCount(Integer accessCount) {
        this.accessCount = accessCount;
        return this;
    }

    /**
     * Get the profileCount value.
     *
     * @return the profileCount value
     */
    public Integer profileCount() {
        return this.profileCount;
    }

    /**
     * Set the profileCount value.
     *
     * @param profileCount the profileCount value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withProfileCount(Integer profileCount) {
        this.profileCount = profileCount;
        return this;
    }

    /**
     * Get the attachCount value.
     *
     * @return the attachCount value
     */
    public Integer attachCount() {
        return this.attachCount;
    }

    /**
     * Set the attachCount value.
     *
     * @param attachCount the attachCount value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withAttachCount(Integer attachCount) {
        this.attachCount = attachCount;
        return this;
    }

    /**
     * Get the noteCount value.
     *
     * @return the noteCount value
     */
    public Integer noteCount() {
        return this.noteCount;
    }

    /**
     * Set the noteCount value.
     *
     * @param noteCount the noteCount value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withNoteCount(Integer noteCount) {
        this.noteCount = noteCount;
        return this;
    }

    /**
     * Get the ownerUserID value.
     *
     * @return the ownerUserID value
     */
    public Integer ownerUserID() {
        return this.ownerUserID;
    }

    /**
     * Set the ownerUserID value.
     *
     * @param ownerUserID the ownerUserID value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withOwnerUserID(Integer ownerUserID) {
        this.ownerUserID = ownerUserID;
        return this;
    }

    /**
     * Get the ownerUserFullName value.
     *
     * @return the ownerUserFullName value
     */
    public String ownerUserFullName() {
        return this.ownerUserFullName;
    }

    /**
     * Set the ownerUserFullName value.
     *
     * @param ownerUserFullName the ownerUserFullName value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withOwnerUserFullName(String ownerUserFullName) {
        this.ownerUserFullName = ownerUserFullName;
        return this;
    }

    /**
     * Get the ownerGroupID value.
     *
     * @return the ownerGroupID value
     */
    public Integer ownerGroupID() {
        return this.ownerGroupID;
    }

    /**
     * Set the ownerGroupID value.
     *
     * @param ownerGroupID the ownerGroupID value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withOwnerGroupID(Integer ownerGroupID) {
        this.ownerGroupID = ownerGroupID;
        return this;
    }

    /**
     * Get the ownerGroupName value.
     *
     * @return the ownerGroupName value
     */
    public String ownerGroupName() {
        return this.ownerGroupName;
    }

    /**
     * Set the ownerGroupName value.
     *
     * @param ownerGroupName the ownerGroupName value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withOwnerGroupName(String ownerGroupName) {
        this.ownerGroupName = ownerGroupName;
        return this;
    }

    /**
     * Get the creatorUserID value.
     *
     * @return the creatorUserID value
     */
    public Integer creatorUserID() {
        return this.creatorUserID;
    }

    /**
     * Set the creatorUserID value.
     *
     * @param creatorUserID the creatorUserID value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withCreatorUserID(Integer creatorUserID) {
        this.creatorUserID = creatorUserID;
        return this;
    }

    /**
     * Get the creatorUserFullName value.
     *
     * @return the creatorUserFullName value
     */
    public String creatorUserFullName() {
        return this.creatorUserFullName;
    }

    /**
     * Set the creatorUserFullName value.
     *
     * @param creatorUserFullName the creatorUserFullName value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withCreatorUserFullName(String creatorUserFullName) {
        this.creatorUserFullName = creatorUserFullName;
        return this;
    }

    /**
     * Get the creatorGroupID value.
     *
     * @return the creatorGroupID value
     */
    public Integer creatorGroupID() {
        return this.creatorGroupID;
    }

    /**
     * Set the creatorGroupID value.
     *
     * @param creatorGroupID the creatorGroupID value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withCreatorGroupID(Integer creatorGroupID) {
        this.creatorGroupID = creatorGroupID;
        return this;
    }

    /**
     * Get the creatorGroupName value.
     *
     * @return the creatorGroupName value
     */
    public String creatorGroupName() {
        return this.creatorGroupName;
    }

    /**
     * Set the creatorGroupName value.
     *
     * @param creatorGroupName the creatorGroupName value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withCreatorGroupName(String creatorGroupName) {
        this.creatorGroupName = creatorGroupName;
        return this;
    }

    /**
     * Get the modifierUserID value.
     *
     * @return the modifierUserID value
     */
    public Integer modifierUserID() {
        return this.modifierUserID;
    }

    /**
     * Set the modifierUserID value.
     *
     * @param modifierUserID the modifierUserID value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withModifierUserID(Integer modifierUserID) {
        this.modifierUserID = modifierUserID;
        return this;
    }

    /**
     * Get the modifierUserFullName value.
     *
     * @return the modifierUserFullName value
     */
    public String modifierUserFullName() {
        return this.modifierUserFullName;
    }

    /**
     * Set the modifierUserFullName value.
     *
     * @param modifierUserFullName the modifierUserFullName value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withModifierUserFullName(String modifierUserFullName) {
        this.modifierUserFullName = modifierUserFullName;
        return this;
    }

    /**
     * Get the modifierGroupID value.
     *
     * @return the modifierGroupID value
     */
    public Integer modifierGroupID() {
        return this.modifierGroupID;
    }

    /**
     * Set the modifierGroupID value.
     *
     * @param modifierGroupID the modifierGroupID value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withModifierGroupID(Integer modifierGroupID) {
        this.modifierGroupID = modifierGroupID;
        return this;
    }

    /**
     * Get the modifierGroupName value.
     *
     * @return the modifierGroupName value
     */
    public String modifierGroupName() {
        return this.modifierGroupName;
    }

    /**
     * Set the modifierGroupName value.
     *
     * @param modifierGroupName the modifierGroupName value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withModifierGroupName(String modifierGroupName) {
        this.modifierGroupName = modifierGroupName;
        return this;
    }

    /**
     * Get the creationTime value.
     *
     * @return the creationTime value
     */
    public DateTime creationTime() {
        return this.creationTime;
    }

    /**
     * Set the creationTime value.
     *
     * @param creationTime the creationTime value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withCreationTime(DateTime creationTime) {
        this.creationTime = creationTime;
        return this;
    }

    /**
     * Get the modificationTime value.
     *
     * @return the modificationTime value
     */
    public DateTime modificationTime() {
        return this.modificationTime;
    }

    /**
     * Set the modificationTime value.
     *
     * @param modificationTime the modificationTime value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withModificationTime(DateTime modificationTime) {
        this.modificationTime = modificationTime;
        return this;
    }

    /**
     * Get the accessTime value.
     *
     * @return the accessTime value
     */
    public DateTime accessTime() {
        return this.accessTime;
    }

    /**
     * Set the accessTime value.
     *
     * @param accessTime the accessTime value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withAccessTime(DateTime accessTime) {
        this.accessTime = accessTime;
        return this;
    }

    /**
     * Get the resolutionTime value.
     *
     * @return the resolutionTime value
     */
    public DateTime resolutionTime() {
        return this.resolutionTime;
    }

    /**
     * Set the resolutionTime value.
     *
     * @param resolutionTime the resolutionTime value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withResolutionTime(DateTime resolutionTime) {
        this.resolutionTime = resolutionTime;
        return this;
    }

    /**
     * Get the category value.
     *
     * @return the category value
     */
    public Integer category() {
        return this.category;
    }

    /**
     * Set the category value.
     *
     * @param category the category value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withCategory(Integer category) {
        this.category = category;
        return this;
    }

    /**
     * Get the reservedInt1 value.
     *
     * @return the reservedInt1 value
     */
    public Integer reservedInt1() {
        return this.reservedInt1;
    }

    /**
     * Set the reservedInt1 value.
     *
     * @param reservedInt1 the reservedInt1 value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withReservedInt1(Integer reservedInt1) {
        this.reservedInt1 = reservedInt1;
        return this;
    }

    /**
     * Get the reservedInt2 value.
     *
     * @return the reservedInt2 value
     */
    public Integer reservedInt2() {
        return this.reservedInt2;
    }

    /**
     * Set the reservedInt2 value.
     *
     * @param reservedInt2 the reservedInt2 value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withReservedInt2(Integer reservedInt2) {
        this.reservedInt2 = reservedInt2;
        return this;
    }

    /**
     * Get the reservedString1 value.
     *
     * @return the reservedString1 value
     */
    public String reservedString1() {
        return this.reservedString1;
    }

    /**
     * Set the reservedString1 value.
     *
     * @param reservedString1 the reservedString1 value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withReservedString1(String reservedString1) {
        this.reservedString1 = reservedString1;
        return this;
    }

    /**
     * Get the state value.
     *
     * @return the state value
     */
    public String state() {
        return this.state;
    }

    /**
     * Set the state value.
     *
     * @param state the state value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withState(String state) {
        this.state = state;
        return this;
    }

    /**
     * Get the name value.
     *
     * @return the name value
     */
    public String name() {
        return this.name;
    }

    /**
     * Set the name value.
     *
     * @param name the name value to set
     * @return the GetEntityBaseResponse object itself.
     */
    public GetEntityBaseResponse withName(String name) {
        this.name = name;
        return this;
    }

}
